{{-- マイページ（自分の投稿一覧） --}}
@extends('layouts.user')

@section('title', 'マイページ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>マイページ</h2>
            <form action="{{ action('User\UserController@index') }}" method="get" enctype="multipart/form-data">
                
            </form>
        </div>
    </div>
</div>
@endsection