<html lang="ru">
@php(session_start())
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/main.js') }}">
    <link rel="stylesheet" href="{{ asset('css/adapt.css') }}">
</head>
<body>
<header class="d-flex align-items-center">
    <div class="container">
        <nav class="d-flex align-items-center">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
            <ul>
                <li>
                    <a href="/" class="{{ request()->is('/') ? 'active-nav-text' : 'nav-text' }}">
                        Соискателям
                    </a>
                </li>
                <li>
                    <a href="/q" class="{{ request()->is('q') ? 'active-nav-text' : 'nav-text' }}">
                        Работодателям
                    </a>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('#') ? 'active-nav-text' : 'nav-text' }}">
                        Вакансии
                    </a>
                </li>
            </ul>
            @auth()
            <a href="{{route('profile')}}">
                <button class="auth-btn">
                    <img src="{{ asset('img/avatar.svg')}}" alt="Профиль" class="log-nav">
                    <span class="lk-1">Личный кабинет</span>
                </button>
            </a>
            @endauth
            @guest
            <a href="{{route('profile')}}">
                <button>
                    <span>Регистрация/Вход</span>
                </button>
            </a>
            @endguest
        </nav>
    </div>
</header>
