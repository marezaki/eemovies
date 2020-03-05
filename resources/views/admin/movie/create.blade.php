@extends('layouts.admin')
@section('title', '作品情報の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>作品情報の新規作成</h2>
                <form action="{{ action('Admin\MovieController@create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="director">監督</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="director" value="{{ old('director') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="actor">キャスト</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="actor" value="{{ old('actor') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image_path">イメージ</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="description">説明文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" rows="20">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="year">公開年</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="year" value="{{ old('year') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="type">ジャンル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="country">製作国</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection