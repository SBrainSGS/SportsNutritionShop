<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/checkout.css') }}">
</head>
<body>
<header>
    @include('partials.header')
</header>

<div class="main_body">
    <h1>Оформление заказа</h1>

    <div class="order-details">
        <h2>Детали заказа</h2>
        <table>
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($baskets as $basket)
                <tr>
                    <td>{{ $basket->product->product_name }}</td>
                    <td>{{ $basket->product->price }}</td>
                    <td>{{ $basket->quantity }}</td>
                    <td>{{ $basket->quantity * $basket->product->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="order-form">
        <h2>Данные для доставки</h2>
        <form action="{{ url('/checkout/add') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="phone">Телефон</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="address">Адрес доставки</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <button type="submit" class="btn">Оформить заказ</button>
        </form>
    </div>
</div>

<footer>
    @include('partials.footer')
</footer>
</body>
</html>
