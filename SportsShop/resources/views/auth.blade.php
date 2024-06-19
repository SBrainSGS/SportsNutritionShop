<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация - Body Maker</title>
    <link rel="stylesheet" href="{{asset('assets/styles/auth.css?v=').time()}}">
</head>
<body>
<header>
    @include('partials.header')
</header>
<div class="form-container">
    <div class="form-box">
        <form id="login-form" action="{{ route('login') }}" method="POST">
            @csrf
            <h2>Авторизация</h2>
            <div class="input-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" name="email" required>
            </div>
            <div class="input-group">
                <label for="login-password">Пароль</label>
                <input type="password" id="login-password" name="password" required>
            </div>
            <button type="submit" class="btn">Войти</button>
            <p class="switch-form">Нет аккаунта? <a href="#" id="show-register">Зарегистрироваться</a></p>
        </form>

        <form id="register-form" action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Регистрация</h2>
            <div class="input-group">
                <label for="fio">ФИО</label>
                <input type="text" id="fio" name="fio" required>
            </div>
            <div class="input-group">
                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Номер телефона</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="register-password">Пароль</label>
                <input type="password" id="register-password" name="password" required>
            </div>
            <div class="input-group">
                <label for="register-confirm-password">Подтвердите Пароль</label>
                <input type="password" id="register-confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="btn">Зарегистрироваться</button>
            <p class="switch-form">Уже есть аккаунт? <a href="#" id="show-login">Войти</a></p>
        </form>
    </div>
</div>
<footer>
    @include('partials.footer')
</footer>

<script>
    document.getElementById('show-register').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
    });

    document.getElementById('show-login').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('login-form').style.display = 'block';
    });

    // Initially show the login form
    document.getElementById('register-form').style.display = 'none';
</script>
</body>
</html>
