{{-- 投稿一覧画面（管理用） --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '投稿一覧')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿一覧</h2>
                <form action="{{ action('Admin\ReviewController@index') }}" method="get" enctype="multipart/form-data">
                    
                </form>
            </div>
        </div>
    </div>
@endsection