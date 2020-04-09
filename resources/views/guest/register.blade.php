@extends('layouts.user')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('title', '新規登録')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>アカウントの新規作成</h2>
        </div>
        <div class="login-form">
            <p>ユーザー登録するとできること</p>
            <ul>
                <li><i class="fas fa-check"></i>　映画レビューの投稿</li>
                <li><i class="fas fa-check"></i>　映画のリクエストの送信</li>
                <li><i class="fas fa-check"></i>　投稿にいいねをつける</li>
            </ul>
            <a  class="login-button twitter" href="/auth/twitter"><i class="fab fa-twitter"></i> Twitterで新規登録</a>
            <a  class="login-button" href="/register">Twitterアカウントをお持ちでない方</a>
        </div>
    </div>
@endsection