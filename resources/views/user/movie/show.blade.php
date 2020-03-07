@extends('layouts.user')
@section('title', '作品一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\MovieController@show') }}" method="get">
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
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="50%">タイトル</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $movies)
                                <tr>
                                    <td>
                                        <a href="{{ action('Admin\MovieController@status', ['id' => $movies->id]) }}">{{ $movies->title }}</a>
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