<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body Maker - Спортивное питание</title>
    <link rel="stylesheet" href="{{asset('assets/styles/welcome.css?v=').time()}}">
</head>
<body>
<header>
    @include('partials.header')
</header>
<main>
    <div class="promo">
        <div class="promo-text">
            <h1>Акция <span>2+1</span></h1>
            <p>При покупке двух банок протеина третью получаешь в подарок!</p>
            <div class="promo-image">
                <img src="{{asset('storage/assets/goods_previews/protein.png')}}" alt="Jams">
            </div>
            <button class="add-to-cart">Положить в корзину</button>
        </div>
    </div>
    <!-- Хиты продаж -->
    <section class="best-sellers">
        <h2>Хиты продаж</h2>
        <div class="product-carousel">
            <div class="product-item">
                <img src="{{asset('storage/assets/goods_previews/bcaa12000.png')}}" alt="BCAA Powder">
                <h3>BCAA Powder 12000 228 гр</h3>
                <p>Ultimate Nutrition</p>
                <p class="price">750 руб</p>
                <p class="old-price">1050 руб</p>
                <p class="stock">В наличии</p>
                <button class="add-to-cart">Положить в корзину</button>
            </div>
            <div class="product-item">
                <img src="{{asset('storage/assets/goods_previews/AnimalPak44.png')}}" alt="Animal Pak">
                <h3>Animal Pak 44 пак.</h3>
                <p>Universal Nutrition</p>
                <p class="price">2990 руб</p>
                <p class="old-price">3490 руб</p>
                <p class="stock">В наличии</p>
                <button class="add-to-cart">Положить в корзину</button>
            </div>
            <div class="product-item">
                <img src="{{asset('storage/assets/goods_previews/whey_protein.jpg')}}" alt="Whey Protein">
                <h3>Whey Protein 2268 гр</h3>
                <p>RPS Nutrition</p>
                <p class="price">2210 руб</p>
                <p class="old-price">2880 руб</p>
                <p class="stock">В наличии</p>
                <button class="add-to-cart">Положить в корзину</button>
            </div>
            <div class="product-item">
                <img src="{{asset('storage/assets/goods_previews/lean_protein.jpg')}}" alt="Lean Protein Shake">
                <h3>Lean Protein Shake 750 гр</h3>
                <p>VP Lab Nutrition</p>
                <p class="price">2220 руб</p>
                <p class="old-price">2800 руб</p>
                <p class="stock">В наличии</p>
                <button class="add-to-cart">Положить в корзину</button>
            </div>
        </div>
        <div class="carousel-indicators">
            <span class="active">01</span>
            <span>02</span>
            <span>03</span>
        </div>
    </section>
    <!-- Почему нас выбирают -->
    <section class="why-choose-us">
        <h2>Почему нас выбирают</h2>
        <div class="features">
            <div class="feature-item">
                <div class="icon-circle">
                    <img src="{{asset('assets/icons/building.svg')}}" alt="Доставка по всей России">
                </div>
                <p>Доставка по всей России</p>
            </div>
            <div class="feature-item">
                <div class="icon-circle">
                    <img src="{{asset('assets/icons/coins.svg')}}" alt="Низкие цены, акции и скидки">
                </div>
                <p>Низкие цены, акции и скидки</p>
            </div>
            <div class="feature-item">
                <div class="icon-circle">
                    <img src="{{asset('assets/icons/certify.svg')}}" alt="Сертифицированная продукция">
                </div>
                <p>Сертифицированная продукция</p>
            </div>
        </div>
    </section>
</main>
<!-- Футер -->
<footer>
    @include('partials.footer')
</footer>
</body>
</html>
