<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        try {
            $products = $this->productRepository->newArrivalProducts();
            return view('welcome', compact('products'));
        } catch (\Exception $exception) {
            Log::error('Error fetching featured products: ' . $exception->getMessage());
            return view('welcome')->withErrors(['product' => $exception->getMessage()]);
        }
    }

    public function show(Product $product)
    {

        try {
            return $product->loadMissing('images');
        }catch (\Exception $exception){
            Log::error('Error fetching product details: ' . $exception->getMessage());
            return;
        }
    }
}
