<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CartRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public CartRepository $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        $products = $this->cartRepository->getCartItems();
        return view('cart.index', compact('products'));
    }

    public function store(Request $request)
    {
        $this->cartRepository->addToCart($request);
        return redirect()->route('cart.index')->with('success', 'Product added to cart');
    }

    public function update(Request $request)
    {

        $products = $this->cartRepository->updateCart($request);
        //return redirect()->route('cart.index')->with('success', 'Product updated successfully');

      /*  // Validate input
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Retrieve cart from session
        $cart = session('cart-items', []);

        // Check if product exists in the cart
        if (array_key_exists($validated['product_id'], $cart)) {
            // Update the quantity
            $cart[$validated['product_id']]['quantity'] = $validated['quantity'];
            session(['cart-items' => $cart]);
            return response()->json(['success' => true]);
        }
        return 'error';*/
    }

    public function destroy($product)
    {
        $this->cartRepository->removeFromCart($product);
        return redirect()->route('cart.index')->with('success', 'Product removed from the cart');
    }
}
