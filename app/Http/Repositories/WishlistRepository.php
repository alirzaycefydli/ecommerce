<?php

namespace App\Http\Repositories;

use App\Models\Product;

class WishlistRepository
{

    public function getWishlist()
    {
        $wishlist = session('wishlist', []);
        return Product::whereIn('id', $wishlist)
            ->with(['primaryImage','reviews'])
            ->get();
    }

    public function addToWishlist($productId)
    {
        if (auth()->check()) {
            return $this->addToUserWishlist($productId);
        } else {
            return $this->addToGuestWishlist($productId);
        }
    }

    public function addToGuestWishlist($productId)
    {
        $wishlist = session('wishlist', []);
        if (!in_array($productId, $wishlist)) {
            $wishlist[] = $productId;
            session(['wishlist' => $wishlist]);
        }
        return $wishlist;
    }

    public function addToUserWishlist($productId)
    {
        $user = auth()->user();
        return $user->wishlist()->syncWithoutDetaching([$productId]);
    }

    public function removeFromWishlist($product)
    {
        if (auth()->check()) {
            $user = auth()->user();
            return $user->wishlist()->detach($product);
        }
        else{
            $wishlist = session('wishlist', []);
            // Remove product from the wishlist array
            $wishlist = array_diff($wishlist, [$product]);
            // Save the updated wishlist back to the session
            session(['wishlist' => $wishlist]);
            return $wishlist;
        }
    }

}
