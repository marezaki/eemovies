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
                <li><i class="fas fa-check"></i>　レビューの投稿</li>
                <li><i class="fas fa-check"></i>　映画のリクエストの送信</li>
                {{-- <li><i class="fas fa-check"></i>　気に入った投稿のお気に入り追加</li> --}}
            </ul>
            <a  class="login-button twitter" href="/auth/twitter"><i class="fab fa-twitter"></i> Twitterで新規登録</a>
            <a  class="login-button" href="/register">Twitterアカウントをお持ちでない方</a>
        </div>
    </div>
@endsection