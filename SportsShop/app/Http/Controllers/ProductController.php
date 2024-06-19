<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function getProduct($id)
    {
        $product = Product::where('product_id', $id)->first();
        return view('product', ['product' => $product]);
    }

    public function getProducts(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->get('category_id', 'all');

        if ($selectedCategory === 'all') {
            $products = Product::with('image')->paginate(12);
        } else {
            $products = Product::with('image')->where('category_id', $selectedCategory)->paginate(12);
        }

        return view('catalog', compact('products', 'categories', 'selectedCategory'));
    }
}
