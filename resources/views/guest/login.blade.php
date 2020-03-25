@extends('layouts.user')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('title', 'EE | MOVIESについて')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>ログイン</h2>
        </div>
    </div>
    <div class="login-form">
        <a  class="login-button" href="/auth/twitter"><i class="fab fa-twitter"></i> Twitterで登録 / ログインする！</a>
    </div>
@endsection