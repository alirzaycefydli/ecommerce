<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
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
            return;
        }
    }

    public function show(Product $product)
    {
        try {
            $product = $product->loadMissing('images');
            return view('product.show', compact('product'));
        } catch (\Exception $exception) {
            Log::error('Error fetching product details: ' . $exception->getMessage());
            return;
        }
    }
}
