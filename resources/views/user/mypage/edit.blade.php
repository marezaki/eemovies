{{-- マイページの編集画面 --}}
@extends('layouts.user')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'マイページ編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページの編集</h2>
                <form action="{{ action('Admin\ProfileController@edit') }}" method="get" enctype="multipart/form-data">
                    {{-- 画像の指定 --}}
                    <div class="form-group row">
                        <label class="col-md-2" for="title">Profile Picture</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{-- 名前の変更覧 --}}
                    <div class="form-group row">
                        <label class="col-md-2">Your Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    {{-- 更新ボタン --}}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection