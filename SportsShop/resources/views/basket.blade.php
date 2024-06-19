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
            @foreach($baskets as $basket)
                <div class="basket-item">
                    <h3>{{ $basket->product->product_name }}</h3>
                </div>
            @endforeach
        @endif
    </div>
</section>

<footer>
    @include('partials.footer')
</footer>
</body>
</html>
