@extends('layouts.user')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('title', 'ログイン')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>既存アカウントへログイン</h2>
        </div>
        <div class="login-form">
            <a  class="login-button twitter" href="/auth/twitter"><i class="fab fa-twitter"></i> Twitterでログイン</a>
            <a  class="login-button" href="/login">Twitterアカウントをお持ちでない方</a>
        </div>
    </div>
@endsection