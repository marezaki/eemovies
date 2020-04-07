@extends('layouts.user')
<link href="{{ asset('css/mypage.css') }}" rel="stylesheet">

@section('title', 'マイページ')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>マイページ</h2>
        </div>
        <div class="row-table col-md-12">
            <div class="row">
                <table class="table">
                    @foreach($reviews as $review)
                        <div class="card">
                            <img class="card-image" src="{{ $review->movie->image_path }}" class="card-img-top">
                            <div class="card-body">
                                <a class="card-movie" href="{{ action('User\MovieController@status', ['id' => $review->movie_id]) }}">{{ $review->movie->japanese }}</a>
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
                                    <p class="spoilers">ネタバレ！</p>
                                @endif
                                <a class="card-title" href="{{ action('User\ReviewController@status', ['id' => $review->id]) }}">{{ $review->title }}</a>
                                <p class="card-user">{{ $review->user->name }}</p>
                            </div>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection