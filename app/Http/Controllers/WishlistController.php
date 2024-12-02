<?php

namespace App\Http\Controllers;

use App\Http\Repositories\WishlistRepository;
use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public WishlistRepository $wishlistRepository;

    public function __construct(WishlistRepository $wishlistRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
    }

    public function index()
    {
        $wishlist = $this->wishlistRepository->getWishlist();
        //dd($wishlist);
        return view('wishlist.index',compact('wishlist'));
    }

    public function store($product)
    {
        try {
            $this->wishlistRepository->addToWishlist($product);
            return redirect()->route('wishlist.index')->with('success', 'Product added to wishlist');
        } catch (\Throwable $th) {

        }
    }

    public function destroy($product)
    {
        try {
            $this->wishlistRepository->removeFromWishlist($product);
            return redirect()->route('wishlist.index')->with('success', 'Product removed from wishlist');
        }catch (\Throwable $th) {

        }
    }
}
