@extends('layouts.user')
<link href="{{ asset('css/movie.css') }}" rel="stylesheet">

@section('title', '作品一覧')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>作品を探す</h2>
        </div>
        <div class="serch-box">
            <form action="{{ action('User\MovieController@index') }}" method="get">
                <div class="serch-comment">作品タイトルを検索する</div>
                <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                {{ csrf_field() }}
            </form>
        </div>
        <div class="row-table col-md-12">
            <div class="row">
                <table class="table">
                    @foreach($posts as $movie)
                        <div class="card">
                            <a href="{{ action('User\MovieController@status', ['id' => $movie->id]) }}"><img src="{{ asset('storage/image/'.$movie->image_path )}}" class="card-img-top"></a>
                            <div class="card-body">
                                <a href="{{ action('User\MovieController@status', ['id' => $movie->id]) }}" class="card-title">{{ $movie->japanese }}</a>
                                <p class="card-text">{{ $movie->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection