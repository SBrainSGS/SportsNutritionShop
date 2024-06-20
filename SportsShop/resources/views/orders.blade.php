<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказы пользователя</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/orders.css') }}">
</head>
<body>
<header>
    @include('partials.header')
</header>

<main class="orders-list">
    <h1>Мои заказы</h1>
    @if($orders->isEmpty())
        <p>У вас пока нет заказов.</p>
    @else
        @foreach($orders as $order)
            <div class="order">
                <div class="order-header" onclick="toggleOrderDetails({{ $order->order_id }})">
                    <h2>Заказ #{{ $order->order_id }}</h2>
                    <p>Дата: {{ $order->date }}</p>
                    <p>Статус: {{ $order->status }}</p>
                    <p>Сумма: {{ $order->price }} руб.</p>
                </div>
                <div class="order-details" id="order-{{ $order->order_id }}">
                    <h3>Товары в заказе:</h3>
                    <ul class="order-items">
                        @foreach($order->items as $item)
                            <li>{{ $item->product->product_name }}.</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    @endif
</main>

<footer>
    @include('partials.footer')
</footer>

<script>
    function toggleOrderDetails(orderId) {
        const orderDetails = document.getElementById(`order-${orderId}`);
        if (orderDetails.style.display === 'none' || orderDetails.style.display === '') {
            orderDetails.style.display = 'block';
        } else {
            orderDetails.style.display = 'none';
        }
    }
</script>
</body>
</html>
