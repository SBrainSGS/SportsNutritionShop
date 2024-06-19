<nav class="main-nav">
    <div class="logo">
        <a href="{{url('/')}}"><img src="logo.png" alt="Body Maker"></a>
    </div>
    <ul class="nav-links">
        <li><a href="{{url('/catalog')}}">Каталог</a></li>
        <li><a href="{{url('/delivery')}}">Доставка и оплата</a></li>
        <li><a href="#">О компании</a></li>
    </ul>
    <div class="nav-icons">
        <a href="{{Auth::check() ? url('/basket') : '#'}}"><img src="{{asset('assets/icons/cart.png')}}" alt="Корзина"></a>
        <a href="{{Auth::check() ? '#' : url('/auth')}}"><img src="{{asset('assets/icons/account.png')}}" alt="Аккаунт"></a>
    </div>
</nav>
