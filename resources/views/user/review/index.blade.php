@extends('layouts.user')
<link href="{{ asset('css/review.css') }}" rel="stylesheet">

@section('title', '投稿一覧')

@section('content')
    <div class="container">
        <div class="row-top">
            <div class="col-md-8 mx-auto">
                <h1>みんなのレビュー</h1>
                <label class="bad">Bad</label>
                <label class="a">A</label>
                <label class="bar">----------------></label>
                <label class="e">E</label>
                <label class="good">Good</label>
            </div>
        </div>

        <div class="row">
            <div class="list-movies col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <tbody>
                            @foreach($posts as $review)
                                <tr>
                                    <td>
                                        <p>{{ $review->total }}<span>{{ $review->movie_id }}</span></p> {{-- 映画の名前をとって表示させる --}}
                                        <label>{{ $review->title }}</label>
                                        <label><span class="happy">喜</span>{{ $review->happy }}</label>
                                        <label><span class="excited">楽</span>{{ $review->excited }}</label>
                                        <label><span class="funny">笑</span>{{ $review->funny }}</label>
                                        <label><span class="sad">悲</span>{{ $review->sad }}</label>
                                        <label><span class="disgusted">怒</span>{{ $review->disgusted }}</label>
                                        <label><span class="scary">怖</span>{{ $review->scary }}</label>
                                        <a href="{{ action('User\ReviewController@status', ['id' => $review->id]) }}"><button>詳細</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection