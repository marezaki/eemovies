@extends('layouts.user')
<link href="{{ asset('css/mypage.edit.css') }}" rel="stylesheet">

@section('title', 'ユーザーの編集')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>プロフィールの編集</h2>
        </div>
        <form action="{{ action('User\UserController@update') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group row">
                <label class="name col-md-2" for="name">ユーザーネーム</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="name" value="{{ $user_name }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <input type="hidden" name="id" value="{{ $user_id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="button" value="更新">
                </div>
            </div>
        </form>
    </div>
@endsection