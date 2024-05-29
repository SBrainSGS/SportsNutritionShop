<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог - Body Maker</title>
    <link rel="stylesheet" href="{{asset('assets/styles/catalog.css?v=').time()}}">
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <!-- Каталог товаров -->
    <section class="product-grid">
        <h2>Все продукты</h2>
        <div class="product-grid-container">
            @foreach($products as $product)
                <div class="product-item">
                    <img src="{{ asset('storage/assets/goods_previews/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->brand }}</p>
                    <p class="price">{{ $product->price }} руб</p>
                    <p class="old-price">{{ $product->old_price }} руб</p>
                    <p class="stock">{{ $product->in_stock ? 'В наличии' : 'Нет в наличии' }}</p>
                    <button class="add-to-cart">Положить в корзину</button>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </section>
    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>
