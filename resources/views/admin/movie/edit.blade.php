@extends('layouts.admin')
@section('title', '作品情報の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>作品情報の編集</h2>
                <form action="{{ action('Admin\MovieController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $movie->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="japanese">邦題</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="japanese" value="{{ $movie->japanese }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="director">監督</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="director" value="{{ $movie->director }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="actor">キャスト</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="actor" value="{{ $movie->actor }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">イメージ</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $movie->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="description">説明文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" rows="20">{{ $movie->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="year">公開年</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="year" value="{{ $movie->year }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="type">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="type" value="{{ $movie->type }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="country">製作国</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="country" value="{{ $movie->country }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $movie->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <a href="{{ action('Admin\MovieController@delete', ['id' => $movie->id]) }}">削除</a>
            </div>
        </div>
    </div>
@endsection