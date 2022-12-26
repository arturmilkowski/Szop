<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product\Product;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();

        return view('product.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }
}
