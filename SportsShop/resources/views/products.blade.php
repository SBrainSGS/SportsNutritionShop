<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары - Body Maker</title>
    <link rel="stylesheet" href="{{asset('assets/styles/products.css?v=').time()}}">
</head>
<body>
<header>
    @include('partials.header')
</header>
<div class="main_body">
    <h1>Все товары</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Производитель</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Акционная цена</th>
            <th>Количество</th>
            <th>Продано</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->manufacturer }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->promo_price }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->sold }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="9">Продукты не найдены</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <button id="show-add-form" class="btn">Добавить товар</button>

    <form id="add-product-form" action="{{ url('/products/add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Добавить новый товар</h2>
        <div class="input-group">
            <label for="category_id">Категория</label>
            <input type="text" id="category_id" name="category_id" required>
        </div>
        <div class="input-group">
            <label for="manufacturer">Производитель</label>
            <input type="text" id="manufacturer" name="manufacturer" required>
        </div>
        <div class="input-group">
            <label for="product_name">Название</label>
            <input type="text" id="product_name" name="product_name" required>
        </div>
        <div class="input-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div class="input-group">
            <label for="price">Цена</label>
            <input type="text" id="price" name="price" required>
        </div>
        <div class="input-group">
            <label for="promo_price">Акционная цена</label>
            <input type="text" id="promo_price" name="promo_price">
        </div>
        <div class="input-group">
            <label for="amount">Количество</label>
            <input type="text" id="amount" name="amount" required>
        </div>
        <div class="input-group">
            <label for="sold">Продано</label>
            <input type="text" id="sold" name="sold">
        </div>
        <div class="input-group">
            <label for="image">Изображение</label>
            <input type="file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn">Добавить</button>
        <button type="reset" class="btn">Очистить</button>
    </form>
</div>
<footer>
    @include('partials.footer')
</footer>

<script>
    document.getElementById('show-add-form').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('add-product-form').style.display = 'block';
    });
</script>
</body>
</html>
