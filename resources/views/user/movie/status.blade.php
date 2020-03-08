@extends('layouts.user')
@section('title', '作品詳細')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品詳細</h2>
        </div>

        <div class="row">
            <form action="{{ action('User\MovieController@status') }}">
                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    {{ $items->title }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="image_path">イメージ</label>
                    <img src="{{ asset('storage/image/'.$items->image_path )}}" width=600 height=400>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="director">監督</label>
                    {{ $items->director }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="actor">キャスト</label>
                    {{ $items->actor }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="description">説明文</label>
                    {{ $items->description }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="year">公開年</label>
                    {{ $items->year }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="type">ジャンル</label>
                    {{ $items->type }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="country">製作国</label>
                    {{ $items->country }}
                </div>
            </form>
            <a href="{{ action('User\ReviewController@add', ['id' => $items->id])}}">{{ $items->title }}を評価する</a>
        </div>
    </div>
@endsection