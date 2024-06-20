<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Basket;

class OrderController extends Controller
{
    /**
     * Показывает все заказы пользователя.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function showOrders(Request $request)
    {
        // Получаем все заказы пользователя с отношением к товарам
        $orders = Order::where('user_id', auth()->id())
            ->with('items.product') // Предположим, что у заказа есть отношение к товарам (items) и к каждому товару (product)
            ->orderByDesc('date')
            ->get();

        // Возвращаем представление с переданными данными
        return view('orders', compact('orders'));
    }

    public function placeOrder(Request $request)
    {
        // Валидация данных формы оформления заказа
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        // Создание нового заказа в таблице orders
        $order = new Order();
        $order->user_id = auth()->id(); // или любой другой способ получения user_id
        $order->price = $this->calculateTotalPrice(); // рассчитайте общую сумму заказа
        $order->payment = false; // пример: пока заказ не оплачен
        $order->status = 'новый'; // пример начального статуса заказа
        $order->date = now(); // текущая дата и время
        $order->save();

        // Получение товаров из корзины текущего пользователя
        $baskets = Basket::where('user_id', auth()->id())->with('product')->get();

        // Создание записей в таблице order_items для каждого товара в корзине
        foreach ($baskets as $basket) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->order_id; // ID новосозданного заказа
            $orderItem->product_id = $basket->product_id; // ID товара из корзины
            $orderItem->save();
        }

        // Опционально: удаление товаров из корзины после оформления заказа
        Basket::where('user_id', auth()->id())->delete();

        // Возврат ответа или перенаправление на другую страницу
        return redirect()->route('welcome')->with('success', 'Заказ успешно оформлен!');
    }

    // Пример метода для расчета общей суммы заказа
    private function calculateTotalPrice()
    {
        $totalPrice = 0;
        $baskets = Basket::where('user_id', auth()->id())->with('product')->get();

        foreach ($baskets as $basket) {
            dd($basket);
            $totalPrice += $basket->product->price;
        }

        return $totalPrice;
    }
}
