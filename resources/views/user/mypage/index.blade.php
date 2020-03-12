@extends('layouts.user')
<link href="{{ asset('css/mypage.css') }}" rel="stylesheet">

@section('title', 'マイページ')

@section('content')
<div class="container">
    <div class="row-top">
        <div class="col-md-8 mx-auto">
            <h2>マイページ</h2>
            <form action="{{ action('User\UserController@index') }}" method="get" enctype="multipart/form-data">
            
            </form>
        </div>
    </div>
</div>
@endsection