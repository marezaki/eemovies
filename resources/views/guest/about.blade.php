@extends('layouts.guest')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">

@section('title', 'EE | MOVIESについて')

@section('content')
    <div class="top-container">
        <div class="content-wrapper">
            <div class="left-container">
                {{-- <img class="top-image" src="/storage/image/about/about.jpg"> --}}
                <h3 class="comment one">みんなの<span>「感情」</span>から</h2>
                <h3 class="comment two">あなたの<span>「気分」</span>にあった作品を</h2>
                <h4 class="comment three">Emotional Evaluation</h4>
            </div>
            <div class="right-container">
                <img class="logo-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/logo/logo.png">
            </div>
        </div>
    </div>

    <div class="middle-container">
        <div class="middle-wrapper">
            <div class="middle-content">
                <h2>感情指数で評価しよう</h2>
                <div class="middle-p">
                    <p>喜び、怒り、悲しみ、楽しさ、笑い、怖さの6つの感情を最大9までで表現！</p>
                    <p>あなたの今の気分にぴったりの作品をみんなのレビューから探しましょう！</p>
                </div>
                <div class="emotional">
                    <i class="far fa-smile-beam"><label class="level">喜び度</label></i>
                    <i class="far fa-grin-squint"><label class="level">楽し度</label></i>
                    <i class="far fa-grin-squint-tears"><label class="level">笑い度</label></i>
                </div>
                <div class="emotional">
                    <i class="far fa-sad-tear"><label class="level">悲し度</label></i>
                    <i class="far fa-angry"><label class="level">怒り度</label></i>
                    <i class="far fa-flushed"><label class="level">怖い度</label></i>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-container">
        <div class="bottom-wrapper">
            <div class="bottom-content">
                <h2>総合評価</h2>
                <div class="bottom-p">
                    <p>EE MOVIESでは「E評価」が最高評価です！</p>
                    <p>あなたのお気に入りの作品を評価しましょう！</p>
                </div>
                <div class="evaluation">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/a-1015528_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/b-1015529_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/c-1015531_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/d-1015532_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/e-1015533_640.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection