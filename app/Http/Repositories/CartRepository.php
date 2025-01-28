<?php

namespace App\Http\Repositories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CartRepository
{
    public function getCartItems()
    {
        if (auth()->check()) {
            return $this->getUserCartItems();
        } else {
            return $this->getGuestCartItems();
        }
    }

    protected function getGuestCartItems()
    {
        $cartItems = session('cart-items', []);
        $productIds = array_keys($cartItems);
        $products = Product::whereIn('id', $productIds)->with('primaryImage')->get();

        foreach ($products as $product) {
            $product->stock = $product->quantity;
            $product->quantity = $cartItems[$product->id]['quantity'];
        }
        return $products;
    }

    protected function getUserCartItems()
    {
        $cartItems = Cart::where('user_id', auth()->id())->get(['product_id', 'quantity']);
        $products = Product::whereIn('id', $cartItems->pluck('product_id'))->with('primaryImage')->get();
        $cartQuantities = $cartItems->pluck('quantity', 'product_id'); // Key: product_id, Value: quantity

        foreach ($products as $product) {
            $product->stock = $product->quantity;
            $product->quantity = $cartQuantities[$product->id] ?? 0;
        }
        return $products;
    }

    public function addToCart($request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // Default to 1 if not provided
        $product = Product::findOrFail($productId);

        if (auth()->check()) {
            return $this->addToUserCart($productId, $quantity, $product);
        } else {
            return $this->addToGuestCart($productId, $quantity, $product);
        }
    }

    protected function addToGuestCart($productId, $quantity, $product)
    {
        $cartItems = session('cart-items', []);
        // If product exists in the cart and quantity is less then the items in the cart, increase the quantity
        if (isset($cartItems[$productId]) && $product->quantity > $quantity) {
            $cartItems[$productId]['quantity'] += $quantity;
        } else {
            // Add new product with initial quantity
            $cartItems[$productId] = ['quantity' => $quantity];
        }
        // Save back to session
        session(['cart-items' => $cartItems]);
        return $cartItems;
    }

    protected function addToUserCart($productId, $quantity, $product)
    {
        $userId = auth()->id();
        $cartItem = Cart::firstOrCreate(
            ['user_id' => $userId, 'product_id' => $productId],
            ['quantity' => $quantity]
        );
        // Update the quantity if quantity of the product available
        if ($product->quantity > $cartItem->quantity) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        }
        return $cartItem;
    }

    public function updateCart($request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($productId);

        if (auth()->check()) {
            return $this->updateUserCart($productId, $quantity, $product);
        } else {
            return $this->updateGuestCartItemQuantity($productId, $quantity, $product);
        }
    }

    public function updateUserCart($productId, $quantity, $product)
    {
        $cartItem = Cart::where('user_id', auth()->id())->where('product_id', $productId)->first();

        if ($quantity <= 0) {
            return $this->removeFromCart($cartItem);
        }
        if ($quantity <= $product->quantity) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
        }
        return $cartItem;
    }

    protected function updateGuestCartItemQuantity($productId, $quantity, $product)
    {
        if ($quantity <= 0) {
            return $this->removeFromCart($product);
        }

        $cartItems = session('cart-items', []);

        if (!isset($cartItems[$productId])) {
            //return QueryResponse::error('Product not found in cart', 404);
        }
        if ($product->quantity < $quantity) {
            $cartItems[$productId]['quantity'] = $quantity;
        }

        session(['cart-items' => $cartItems]);
        return $cartItems;
    }

    public function removeFromCart($product)
    {
        if (auth()->check()) {
            $cartItem = Cart::where('product_id', $product)
                ->where('user_id', auth()->id())
                ->first();

            if ($cartItem) {
                $cartItem->delete();
            }
            return $cartItem;
        } else {
            $cartItems = session('cart-items', []);
            if (isset($cartItems[$product])) {
                unset($cartItems[$product]);
            }
            session(['cart-items' => $cartItems]);
            return $cartItems;
        }
    }

}
