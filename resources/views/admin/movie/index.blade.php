@extends('layouts.admin')
@section('title', '作品管理')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品管理</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\MovieController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
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
                                <th width="50%">タイトル</th>
                                <th width="40%">監督</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $movies)
                                <tr>
                                    <th>{{ $movies->id }}</th>
                                    <td>{{ str_limit($movies->title) }}</td>
                                    <td>{{ str_limit($movies->director) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\MovieController@edit', ['id' => $movies->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\MovieController@delete', ['id' => $movies->id]) }}">削除</a>
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