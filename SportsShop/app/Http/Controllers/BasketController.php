<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function getBasket()
    {
        // Получаем все записи из таблицы baskets для текущего пользователя
        $baskets = Basket::where('user_id', auth()->id())->with('product')->get();

        // Вычисляем общую стоимость всех товаров в корзине
        $totalPrice = $baskets->sum('product.price');

        // Возвращаем представление с переданными данными
        return view('basket', ['baskets' => $baskets, 'totalPrice' => $totalPrice]);
    }

    public function getBasketForCheckout()
    {
        // Получаем все записи из таблицы baskets для текущего пользователя
        $baskets = Basket::where('user_id', auth()->id())->with('product')->get();

        // Вычисляем общую стоимость всех товаров в корзине
        $totalPrice = $baskets->sum('product.price');

        // Возвращаем представление с переданными данными
        return view('checkout', ['baskets' => $baskets, 'totalPrice' => $totalPrice]);
    }

    public function addToBasket(Request $request)
    {
        // Проверяем, аутентифицирован ли пользователь
        if (Auth::check()) {

            // Извлекаем данные о продукте из запроса
            $productId = $request->input('product_id');
            $basket = new Basket();

            // Устанавливаем значения для полей модели
            $basket->user_id = auth()->user()->user_id;
            $basket->product_id = $productId;

            // Сохраняем новую запись в базе данных
            $basket->save();

            // Можно также добавить проверку успешного сохранения
            if ($basket->wasRecentlyCreated) {
                // Если запись успешно добавлена, возвращаем успешный статус
                return response()->json(['message' => 'Product added to basket successfully'], 200);
            } else {
                // Если произошла ошибка при сохранении, возвращаем ошибку сервера
                return response()->json(['error' => 'Failed to add product to basket'], 500);
            }
        }
    }
}
