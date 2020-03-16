@extends('layouts.user')
<link href="{{ asset('css/movie.status.css') }}" rel="stylesheet">

@section('title', '作品詳細')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>作品詳細</h2>
        </div>

        <div class="row">
            <form class="col-md-8">
                <div class="form-group">
                    <label class="tag"for="title">タイトル</label>
                    <div class="title">
                        {{ $items->title }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="image">
                        <img class="movie-image" src="{{ asset('storage/image/'.$items->image_path )}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="director">監督</label>
                    <div class="director">
                        {{ $items->director }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="actor">キャスト</label>
                    <div class="actor">
                        {{ $items->actor }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="description">解説</label>
                    <div class="description">
                        {{ $items->description }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="year">公開年</label>
                    <div class="year">
                        {{ $items->year }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="type">ジャンル</label>
                    <div class="type">
                        {{ $items->type }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="country">製作国</label>
                    <div class="country">
                        {{ $items->country }}
                    </div>
                </div>
                <a class="create" href="{{ action('User\ReviewController@add', ['id' => $items->id])}}">この作品を評価する</a>
            </form>
        </div>
    </div>
@endsection