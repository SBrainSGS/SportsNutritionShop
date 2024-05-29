<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Получаем продукты с пагинацией по 12 штук на страницу
        $products = Product::paginate(12);

        // Возвращаем вид с переданными продуктами
        return view('products.index', compact('products'));
    }
}
