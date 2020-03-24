@extends('layouts.user')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">

@section('title', 'EE | MOVIESについて')

@section('content')
    <div class="top-container">
        <div class="content-wrapper">
            <div class="left-container">
                <h3 class="comment">みんなの<span>「感情」</span>から</h2>
                <h3 class="comment">あなたの<span>「気分」</span>にあった作品を</h2>
                <h4 class="comment">Emotional Evaluation　<img class="logo-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/logo/logo_red.png"></h4>
            </div>
        </div>
    </div>

    <div class="middle-container">
        <div class="middle-wrapper">
            <div class="middle-left-container">
                <h2>Emotional Evaluation</h2>
                <h3>6つの感情で評価</h3>
                <p>
                    喜び、怒り、悲しみ、楽しさ、笑い、怖さの6つの感情を
                    <br>
                    0から9までの数値で表現
                    <br>
                    今日はどんな作品を見たい気分ですか？
                    <br>
                    あなたの今の気分にぴったりの作品を探してみましょう！
                </p>
            </div>
            <div class="middle-right-container">
                <div class="emotional-box">
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
    </div>

    <div class="bottom-container">
        <div class="bottom-wrapper">
            <div class="bottom-container">
                <h2>Give Your Rating</h2>
                <p>
                    EE MOVIESでは「E評価」が最高評価です
                    <br>
                    思い出の作品やお気に入りの作品はありますか？
                    <br>
                    作品のページから評価してみましょう！
                </p>
                <div class="evaluation">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/a-1015528_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/b-1015529_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/c-1015531_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/d-1015532_640.jpg">
                    <img class="evaluation-image" src="https://eemovies.s3-ap-northeast-1.amazonaws.com/evaluation/e-1015533_640.jpg">
                </div>
            </div>
            <div class="bottom-right-container">
            </div>
        </div>
    </div>
@endsection