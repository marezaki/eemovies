@extends('layouts.user')
<link href="{{ asset('css/movie.css') }}" rel="stylesheet">

@section('title', '作品一覧')

@section('content')
    <div class="container">
        <div class="row-top">
            <h1>作品一覧</h1>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('User\MovieController@index') }}" method="get">
                    <div class="form-group row">
                         <div class="col-md-8">
                             <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                         </div>
                         <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="list-movies col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <p>評価する作品を選択してください</p>
                        </thead>
                        <tbody>
                            @foreach($posts as $movie)
                                <tr>
                                    <td>
                                        <a href="{{ action('User\MovieController@status', ['id' => $movie->id]) }}"><img src="{{ asset('storage/image/'.$movie->image_path )}}" width=230 height=150></a>
                                        <a href="{{ action('User\MovieController@status', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
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