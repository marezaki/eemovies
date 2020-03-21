@extends('layouts.admin')
@section('title', '作品管理')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品管理</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\MovieController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
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
                            <tr>
                                <th width="10%">ID</th>
                                <th width="40%">タイトル</th>
                                <th width="40%">監督</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                                <tr>
                                    <th>{{ $movie->id }}</th>
                                    <td>{{ $movie->title }}</td>
                                    <td>{{ $movie->director }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\MovieController@edit', ['id' => $movie->id]) }}">編集</a>
                                        </div>
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