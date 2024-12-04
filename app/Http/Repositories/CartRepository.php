<?php

namespace App\Http\Repositories;

use App\Models\Cart;
use App\Models\Product;

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

        // Extract product IDs from session data
        $productIds = array_keys($cartItems);

        // Fetch product details
        $products = Product::whereIn('id', $productIds)->with('primaryImage')->get();

        foreach ($products as $product) {
            $product->stock = $product->quantity;
            $product->quantity = $cartItems[$product->id]['quantity'];
        }
        return $products;
    }

    protected function getUserCartItems()
    {
        $cartItem = session('cart-items', []);
        return Product::whereIn('id', $cartItem)->with('primaryImage')->get();
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
            ['quantity' => 0]
        );
        //TODO::Instead of saving twice, do in one line

        // Update the quantity
        if ($product->quantity < $quantity) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        }

        return $cartItem;
    }

    public function updateCart($request)
    {
        if (auth()->check()) {
            return null;
        } else {
            return $this->updateGuestCartItemQuantity($request);
        }
    }

    protected function updateGuestCartItemQuantity($request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($productId);

        if ($quantity <= 0) {
            //return $this->removeFromGuestCart($request); // Call removal method if quantity is 0 or less
        }

        $cartItems = session('cart-items', []);

        if (!isset($cartItems[$productId])) {
            //return QueryResponse::error('Product not found in cart', 404);
        }

        // Update the quantity
        if ($product->quantity < $quantity) {
            $cartItems[$productId]['quantity'] = $quantity;
        }

        session(['cart-items' => $cartItems]);
        return $cartItems;
    }

    public function removeFromCart($product)
    {
        if (auth()->check()) {
            return null;
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
