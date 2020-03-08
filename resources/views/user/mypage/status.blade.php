{{-- 自分の投稿の詳細 --}}
@extends('layouts.user')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '自分の投稿詳細')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>自分の投稿の詳細が入る</h2>
                <form action="{{ action('User\ReviewController@status') }}" method="get" enctype="multipart/form-data">
                    
                </form>
            </div>
        </div>
    </div>
@endsection