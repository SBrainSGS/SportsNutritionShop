<nav class="main-nav">
    <div class="logo">
        <a href="{{url('/')}}"><img src="logo.png" alt="Body Maker"></a>
    </div>
    <ul class="nav-links">
        <li><a href="{{url('/catalog')}}">Каталог</a></li>
        <li><a href="#">Скидки</a></li>
        <li><a href="#">Доставка и оплата</a></li>
        <li><a href="#">О компании</a></li>
    </ul>
    <div class="nav-icons">
        <input type="text" placeholder="Поиск">
        <img src="{{asset('assets/icons/search.svg')}}" alt="Поиск">
        <img src="{{asset('assets/icons/cart.png')}}" alt="Корзина">
    </div>
</nav>
