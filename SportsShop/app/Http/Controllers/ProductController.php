<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;

class ProductController extends Controller
{
    public function getProduct($id)
    {
        $product = Product::where('product_id', $id)->first();
        return view('product', ['product' => $product]);
    }

    public function getAllProducts(Request $request)
    {
        $products = Product::with('image')->get();
        return view('products', ['products' => $products]);
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

    public function createProduct(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'manufacturer' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'promo_price' => 'nullable|numeric',
            'amount' => 'required|integer',
            'sold' => 'nullable|integer',
        ]);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->manufacturer = $request->manufacturer;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->promo_price = $request->promo_price ?? 0;
        $product->amount = $request->amount;
        $product->sold = $request->sold ?? 0;
        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('products', 'public');

            $productImage = new Image();
            $productImage->product_id = $product->product_id;
            $productImage->path = $imagePath;
            $productImage->save();
        }

        return redirect()->route('products')->with('success', 'Product added successfully');
    }
}
