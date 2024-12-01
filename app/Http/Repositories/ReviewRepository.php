<?php

namespace App\Http\Repositories;

use App\Models\Review;

class ReviewRepository
{
    /**
     * Stores the review for the single product
     * */
    public function submitReview($product,$request): void
    {
        Review::create([
            'product_id' => $product->id,
            //'user_id' => 1,//TODO:: change to authenticated user
            'rating' => $request->rating,
            'review' => $request->review,
            'title' => $request->title,
        ]);
    }
}
