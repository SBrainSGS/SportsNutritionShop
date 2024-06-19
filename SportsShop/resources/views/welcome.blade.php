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
    <!-- Промо блок -->
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
<footer>
    @include('partials.footer')
</footer>
</body>
</html>
