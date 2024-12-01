<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ReviewRepository;
use App\Http\Requests\ReviewRequest;
use App\Models\Product;

class ReviewController extends Controller
{
    public ReviewRepository $reviewRepository;
    public function __construct(ReviewRepository $reviewRepository){
        $this->reviewRepository = $reviewRepository;
    }
    public function store(Product $product,ReviewRequest $request)
    {
        try {
            $this->reviewRepository->submitReview($product,$request);
            return redirect()->back();
        }catch (\Exception $exception){
            return;
        }
    }
}
