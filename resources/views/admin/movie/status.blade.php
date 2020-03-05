@extends('layouts.admin')
@section('title', '作品詳細')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品詳細</h2>
        </div>

        <div class="row">
            <form action="{{ action('Admin\MovieController@status') }}">
                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    {{ $items->title }}
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="image_path">イメージ</label>
                    <img src="{{ $items->image_path }}" width=200 height=200>
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
        </div>
    </div>
@endsection