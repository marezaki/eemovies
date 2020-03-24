@extends('layouts.user')
<link href="{{ asset('css/review.status.css') }}" rel="stylesheet">

@section('title', 'レビュー詳細')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>レビュー詳細</h2>
        </div>

        <div class="row">
            <form class="col-md-12">
                <div class="form-group">
                    <label class="tag" for="movie-title">作品タイトル</label>
                    <div class="movie-title">
                        <p>{{ $review->movie->title }}</p>
                    </div>
                </div>   

                <div class="form-group">
                    <label class="tag" for="title">タイトル</label>
                    <div class="title">
                        <label>{{ $review->title }}</label>
                    </div>
                </div>                  
                                
                <div class="form-group">
                    <label class="tag" for="emotion">感情指数</label>
                    <div class="form-group row">
                        <i class="far fa-smile-beam"></i>
                        <label class="level" for="happy">喜び度</label>
                        <label class="number">{{ $review->happy }}</label>
                    
                        <i class="far fa-grin-squint"></i>
                        <label class="level" for="excited">楽し度</label>
                        <label class="number">{{ $review->excited }}</label>
                    
                        <i class="far fa-grin-squint-tears"></i>
                        <label class="level" for="funny">笑い度</label>
                        <label class="number">{{ $review->funny }}</label>
                    </div>
                    <div class="form-group row">
                        <i class="far fa-sad-tear"></i>
                        <label class="level" for="sad">悲し度</label>
                        <label class="number">{{ $review->sad }}</label>
                    
                        <i class="far fa-angry"></i>
                        <label class="level" for="disgusted">怒り度</label>
                        <label class="number">{{ $review->disgusted }}</label>
                    
                        <i class="far fa-flushed"></i>
                        <label class="level" for="scary">怖い度</label>
                        <label class="number">{{ $review->scary }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="tag" for="total">総合評価</label>
                    <div class="image">
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
                    </div>
                </div>         

                <div class="form-group">
                    <div class="body">
                        <label class="body">{{ $review->body }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="created">
                        <label class="created-by">Created By {{ $review->user->name }}</label>
                        <label class="created-at">{{ $review->created_at }}</label>
                    </div>
                </div>

                <a class="status" href="{{ action('Guest\MovieController@status', ['id' => $review->movie_id])}}">この作品の詳細を見る</a>
            </form>
        </div>
    </div>
@endsection