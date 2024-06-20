<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина - Body Maker</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/basket.css?v=').time() }}">
</head>
<body>
<header>
    @include('partials.header')
</header>

<section class="basket-items">
    <h2>Корзина</h2>
    <div class="basket-items-container">
        @if($baskets->isEmpty())
            <h3>Корзина пуста</h3>
        @else
            <ul class="basket-list">
                @foreach($baskets as $basket)
                    <li class="basket-item">
                        <div class="item-info">
                            <h3 class="item-name">{{ $basket->product->product_name }}</h3>
                            <p class="item-description">{{ $basket->product->description }}</p>
                        </div>
                        <div class="item-price">{{ $basket->product->price }} ₽</div>
                        <div class="item-actions">
                            <button class="btn btn-remove">Удалить</button>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="basket-summary">
                <p class="total-price">Итого: <span>{{ $totalPrice }} ₽</span></p>
                <a href="{{url('/checkout')}}"><button class="btn">Оформить заказ</button></a>
            </div>
        @endif
    </div>
</section>

<footer>
    @include('partials.footer')
</footer>
</body>
</html>
