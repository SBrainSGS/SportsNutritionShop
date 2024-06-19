<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->product_name }} - Body Maker</title>
    <link rel="stylesheet" href="{{ asset('assets/styles/product.css?v=') . time() }}">
</head>
<body>
<header>
    @include('partials.header')
</header>
<div class="product-container">
    <div class="product-image">
        <img src="{{ asset($product->image->path) }}" alt="{{ $product->name }}">
    </div>
    <div class="product-details">
        <h1>{{ $product->product_name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Цена: {{ $product->price }} руб.</p>
        <button class="add-to-basket" data-product-id="{{ $product->product_id }}">Добавить в корзину</button>
    </div>
</div>
<footer>
    @include('partials.footer')
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.add-to-basket').click(function () {
            var productId = $(this).data('product-id');

            $.ajax({
                type: 'POST',
                url: '/basket/add',
                data: {
                    product_id: productId,
                    _token: '{{ csrf_token() }}' // добавляем CSRF-токен для защиты от атак CSRF
                },
                success: function (response) {
                    alert(response.message); // Показываем сообщение об успешном добавлении
                },
                error: function (xhr, status, error) {
                    alert('Произошла ошибка: ' + xhr.responseText); // Показываем сообщение об ошибке
                }
            });
        });
    });
</script>
</body>
</html>
