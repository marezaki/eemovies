@extends('layouts.user')
<link href="{{ asset('css/review.css') }}" rel="stylesheet">

@section('title', '投稿一覧')

@section('content')
    <div class="main-container">
        <div class="row-top">
                <h2>みんなのレビュー</h2>
        </div>

        <div class="row-table col-md-12">
            <div class="row">
                <table class="table">
                    @foreach($posts as $review)
                        <div class="card">
                            <img class="card-image" src="{{ asset('storage/image/'.$review->movie->image_path )}}" class="card-img-top">
                            <div class="card-body">
                                <a class="card-movie" href="{{ action('User\MovieController@status', ['id' => $review->movie_id]) }}">{{ $review->movie->japanese }}</a>
                                @if ($review->total == 1)
                                    <p><img class="evaluation" src="{{ asset('/storage/image/evaluation/a.jpg' )}}"></p>
                                @elseif ($review->total == 2)
                                    <p><img class="evaluation" src="{{ asset('/storage/image/evaluation/b.jpg' )}}"></p>
                                @elseif ($review->total == 3)
                                    <p><img class="evaluation" src="{{ asset('/storage/image/evaluation/c.jpg' )}}"></p>
                                @elseif ($review->total == 4)
                                    <p><img class="evaluation" src="{{ asset('/storage/image/evaluation/d.jpg' )}}"></p>
                                @elseif ($review->total == 5)
                                    <p><img class="evaluation" src="{{ asset('/storage/image/evaluation/e.jpg' )}}"></p>
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
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection