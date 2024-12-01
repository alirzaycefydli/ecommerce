<?php

namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepository
{

    /**
     * Returns the latest products
     * @return mixed
     */
    public function newArrivalProducts(): mixed
    {
        return Product::where('is_confirmed', 1)
            ->where('quantity', '>', 0)
            ->with('primaryImage')
            ->latest()
            ->take(4)
            ->get();
    }

}
