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

        {{-- chart.jsの読み込み --}}
        {{-- <script async="" src={{ asset("//www.google-analytics.com/analytics.js") }}></script> --}}
        {{-- <script src={{ asset("../../../dist/2.9.3/Chart.min.js") }}></script> --}}
        {{-- <script src={{ asset("../utils.js") }}></script> --}}

    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="logo" href="{{ action('User\ReviewController@index') }}"><img src="{{ asset('storage/image/logo/logo_red.png')}}" height=60px width=60px></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            {{-- 投稿一覧画面にとぶeemoviesのロゴボタン --}}
                            <a class="menu" href="{{ action('Guest\GuestController@about') }}">EE | MOVIESについて</a>
                            <a class="menu" href="{{ action('Guest\ReviewController@index') }}">みんなのレビュー</a>
                            <a class="menu" href="{{ action('Guest\MovieController@index') }}">作品を探す</a>
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                        @guest
                            <li><a class="nav-link" href="/twitter/login">Twitterで登録 / ログイン</a></li>
                            {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}<span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ action('Auth\TwitterController@logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                                        <form id="logout-form" action="{{ action('Auth\TwitterController@logout') }}"　style="display: none;">
                                            @csrf
                                        </form>
                                        {{-- <a class="dropdown-item" href="{{ action('User\UserController@edit') }}">プロフィール編集</a> --}}
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
                <p class="copyright"><img class="footer-logo" src="{{ asset('storage/image/logo/logo.png')}}" height=30px width=30px>© 2020 EE | MOVIES</p>
            </div>
        </div>
    </body>
</html>