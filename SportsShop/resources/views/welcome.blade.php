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
    <nav class="main-nav">
        <div class="logo">
            <img src="logo.png" alt="Body Maker">
        </div>
        <ul class="nav-links">
            <li><a href="#">Каталог</a></li>
            <li><a href="#">Производители</a></li>
            <li><a href="#">Скидки</a></li>
            <li><a href="#">Доставка и оплата</a></li>
            <li><a href="#">О компании</a></li>
        </ul>
        <div class="nav-icons">
            <input type="text" placeholder="Поиск">
            <img src="search-icon.png" alt="Поиск">
            <img src="cart-icon.png" alt="Корзина">
        </div>
    </nav>
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
                <img src="whey-protein.png" alt="Whey Protein">
                <h3>Whey Protein 2268 гр</h3>
                <p>RPS Nutrition</p>
                <p class="price">2210 руб</p>
                <p class="old-price">2880 руб</p>
                <p class="stock">В наличии</p>
                <button class="add-to-cart">Положить в корзину</button>
            </div>
            <div class="product-item">
                <img src="lean-protein-shake.png" alt="Lean Protein Shake">
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
                <img src="shipping-icon.png" alt="Доставка по всей России">
                <p>Доставка по всей России</p>
            </div>
            <div class="feature-item">
                <img src="discount-icon.png" alt="Низкие цены, акции и скидки">
                <p>Низкие цены, акции и скидки</p>
            </div>
            <div class="feature-item">
                <img src="certified-icon.png" alt="Сертифицированная продукция">
                <p>Сертифицированная продукция</p>
            </div>
        </div>
    </section>
</main>
<!-- Футер -->
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="logo.png" alt="Body Maker">
            <p>Спортивное питание</p>
        </div>
        <ul class="footer-links">
            <li><a href="#">Каталог</a></li>
            <li><a href="#">Производители</a></li>
            <li><a href="#">Скидки</a></li>
            <li><a href="#">Доставка и оплата</a></li>
            <li><a href="#">О компании</a></li>
        </ul>
        <div class="footer-contact">
            <p>+7 (923) 345-45-45</p>
            <p>body_sport@gmail.com</p>
            <div class="footer-socials">
                <img src="vk-icon.png" alt="VK">
                <img src="insta-icon.png" alt="Instagram">
                <img src="fb-icon.png" alt="Facebook">
            </div>
        </div>
    </div>
</footer>
</main>
</body>
</html>
