<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Каталог - Body Maker</title>
    <link rel="stylesheet" href="{{asset('assets/styles/catalog.css?v=').time()}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header>
    @include('partials.header')
</header>
<!-- Каталог товаров -->
<section class="product-grid">
    <h2>Каталог товаров</h2>
    <!-- Выбор категорий -->
    <div class="category-filter">
        <form action="{{ route('catalog') }}" method="GET">
            <button type="submit" name="category_id" value="all" class="category-button{{ $selectedCategory === 'all' ? ' selected' : '' }}">
                Все
            </button>
            @foreach($categories as $category)
                <button type="submit" name="category_id" value="{{ $category->category_id }}" class="category-button{{ $selectedCategory == $category->category_id ? ' selected' : '' }}">
                    {{ $category->category_name}}
                </button>
            @endforeach
        </form>
    </div>

    <div class="product-grid-container">
        @foreach($products as $product)
            <div class="product-item">
                <a href="{{ route('catalog.getProduct', ['id' => $product->product_id]) }}">
                    @if ($product->image)
                        <img src="{{ asset($product->image->path) }}" alt="{{ $product->name }}">
                    @endif
                    <h3>{{ $product->product_name }}</h3>
                    <p class="price">{{ $product->price }} руб</p>
                </a>
                <button data-product-id="{{$product->product_id}}" class="add-to-basket">Положить в корзину</button>

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
<script>
    $(document).ready(function () {
        $('.add-to-basket').click(function () {
            var productId = $(this).data('product-id');
            console.log('Product ID:', productId);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '/basket/add',
                data: {
                    product_id: productId
                },
                success: function (response) {
                    alert(response.message); // Показываем сообщение об успешном добавлении
                },
                error: function (xhr, status, error) {
                    alert('Произошла ошибка: ' + error); // Показываем сообщение об ошибке
                }
            });
        });
    });

</script>
</body>
</html>
