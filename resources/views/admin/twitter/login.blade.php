{{-- ログイン画面 --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ログイン')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Twitterで登録！</h2>
                <form action="{{ action('Auth\TwitterController@add') }}" method="get" enctype="multipart/form-data">
                    <a href="/auth/twitter">ログインする</a>
                    {{-- <a href="/auth/twitter/logout">ログアウト</a> --}}
                
                </form>
            </div>
        </div>
    </div>
@endsection