<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">

        {{-- ファビコン --}}
        <link rel="shortcut icon" href="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/logo/logo_red.png') }}">

    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="logo" href="{{ action('Guest\GuestController@about') }}"><img src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/logo/logo_red.png')}}" height=60px width=60px></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @guest
                                <a class="menu" href="{{ action('Guest\GuestController@about') }}">EE | MOVIESについて</a>
                                <a class="menu" href="{{ action('Guest\ReviewController@index') }}">みんなのレビュー</a>
                                <a class="menu" href="{{ action('Guest\MovieController@index') }}">作品を探す</a>
                            @else
                            <a class="menu" href="{{ action('User\UserController@index') }}">マイページ</a>
                                <a class="menu" href="{{ action('User\ReviewController@index') }}">みんなのレビュー</a>
                                <a class="menu" href="{{ action('User\MovieController@index') }}">作品を探す</a>
                                <a class="menu" href="{{ action('User\DemandController@index') }}">リクエスト</a>
                            @endguest
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                        @guest
                            <li><a class="nav-link" href="/user/register">新規登録</a></li>
                            <li><a class="nav-link" href="/user/login">ログイン</a></li>
                        {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ action('User\UserController@edit') }}">プロフィール編集</a>
                                    <a class="dropdown-item" href="{{ action('Auth\TwitterController@logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                                    <form id="logout-form" action="{{ action('Auth\TwitterController@logout') }}"　style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            <div class="footer">
                <p class="copyright"><img class="footer-logo" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/logo/logo.png')}}" height=30px width=30px>© 2020 EE | MOVIES</p>
            </div>
        </div>
    </body>
</html>