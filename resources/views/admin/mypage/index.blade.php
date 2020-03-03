{{-- マイページのホーム画面 --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'マイページ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>マイページ</h2>
            <form action="{{ action('Admin\ProfileController@index') }}" method="get" enctype="multipart/form-data">
                
                
                {{-- マイページの編集ボタン --}}
                <button type="button" onclick="location.href='./mypage/edit'">編集</button>
                {{-- 画像の表示 --}}
                <img src="#">
                {{-- 名前の表示 --}}
                
                {{-- 自分の最近の投稿一覧を見せる --}}
                
            </form>
        </div>
    </div>
</div>
@endsection
{{-- 自分の投稿一覧画面へのボタン --}}
{{-- 評価一覧画面に移動するボタン（ヘッダーにまとめる） --}}