<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CategoryRepository;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class CategoryController extends Controller
{
    public CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(?Category $category, Request $request)
    {
        try {
            $categories = $this->categoryRepository->getAllCategories();

            $products = $this->categoryRepository->getProductsByCategory($category, $request);

            return view('category.index', compact('categories', 'products'));
        } catch (\Exception $exception) {
            return;
        }
    }


}
