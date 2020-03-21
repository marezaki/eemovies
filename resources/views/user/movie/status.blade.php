@extends('layouts.user')
<link href="{{ asset('css/movie.status.css') }}" rel="stylesheet">

@section('title', '作品詳細')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>作品詳細</h2>
        </div>

        <div class="row">
            <form class="col-md-10">
                <div class="form-group">
                    <label class="tag"for="title">タイトル</label>
                    <div class="title">
                        {{ $movies->title }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="image">
                        <img class="movie-image" src="{{ $movies->image_path }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="director">監督</label>
                    <div class="director">
                        {{ $movies->director }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="actor">キャスト</label>
                    <div class="actor">
                        {{ $movies->actor }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="description">解説</label>
                    <div class="description">
                        {{ $movies->description }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="year">公開年</label>
                    <div class="year">
                        {{ $movies->year }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="type">ジャンル</label>
                    <div class="type">
                        {{ $movies->type }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="tag" for="country">製作国</label>
                    <div class="country">
                        {{ $movies->country }}
                    </div>
                </div>
                <a class="create" href="{{ action('User\ReviewController@add', ['id' => $movies->id])}}">この作品を評価する</a>
            </form>  
        </div>
        <div class="evaluation-content">
            <h2>{{ $movies->japanese }}のレビュー</h2>
        </div>
        <div class="row-table col-md-12">
            <div class="row">
                <table class="table">
                    @foreach($posts as $review)
                        @if ($review->movie->id == $movies->id)
                            <div class="card">
                                {{-- <img class="card-image" src="{{ asset('storage/image/'.$review->movie->image_path )}}" class="card-img-top"> --}}
                                <div class="card-body">
                                    {{-- <a class="card-movie" href="{{ action('User\MovieController@status', ['id' => $review->movie_id]) }}">{{ $review->movie->japanese }}</a> --}}
                                    @if ($review->total == 1)
                                    <p><img class="evaluation" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/a-1015528_640.jpg' )}}"></p>
                                    @elseif ($review->total == 2)
                                        <p><img class="evaluation" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/b-1015529_640.jpg' )}}"></p>
                                    @elseif ($review->total == 3)
                                        <p><img class="evaluation" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/c-1015531_640.jpg' )}}"></p>
                                    @elseif ($review->total == 4)
                                        <p><img class="evaluation" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/d-1015532_640.jpg' )}}"></p>
                                    @elseif ($review->total == 5)
                                        <p><img class="evaluation" src="{{ asset('https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/e-1015533_640.jpg' )}}"></p>
                                    @endif
                                    <div class="card-i-1">
                                        <i class="far fa-smile-beam">{{ $review->happy }}</i>
                                        <i class="far fa-grin-squint">{{ $review->excited }}</i>
                                        <i class="far fa-grin-squint-tears">{{ $review->funny }}</i>
                                    </div>
                                    <div class="card-i-2">
                                        <i class="far fa-sad-tear">{{ $review->sad }}</i>
                                        <i class="far fa-angry">{{ $review->disgusted }}</i>
                                        <i class="far fa-flushed">{{ $review->scary }}</i>
                                    </div>
                                    @if ($review->spoilers == 1)
                                        <p class="spoilers">ネタバレ有り</p>
                                    @endif
                                    <a class="card-title" href="{{ action('User\ReviewController@status', ['id' => $review->id]) }}">{{ $review->title }}</a>
                                    <p class="card-user">{{ $review->user->name }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection