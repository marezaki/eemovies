{{-- ログイン画面 --}}
@extends('layouts.user')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ログイン')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>EE | MOVIES</h2>
                <p>Emotional Evaluation.</p>
                <p>感情でわかる評価</p>
                <form action="{{ action('Auth\TwitterController@add') }}" method="get" enctype="multipart/form-data">
                    <a href="/auth/twitter">Twitterでログイン / 登録</a>
                
                </form>
            </div>
        </div>
    </div>
@endsection