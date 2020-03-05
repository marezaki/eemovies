{{-- レビュー新規投稿画面 --}}
@extends('layouts.user')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビュー新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>レビュー新規作成</h2>
                <form action="{{ action('Admin\ReviewController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    
                    {{-- 映画を選択 --}}
                    {{-- 評価する映画の検索覧 --}}
                    
                    <div class="form-group row">
                        <label class="col-md-2">評価する作品</label>
                    </div>

                    {{-- 投稿のタイトル --}}
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    {{--  評価　AからEまでの表示　--}}
                    <div class="form-group row">
                        <label class="col-md-2">総合評価</label>
                    </div>
                    
                
                    {{-- 感情評価 --}}
                    {{-- グラフを表示 --}}
                    <div class="form-group row">
                        <label class="col-md-2">感情評価</label>
                    </div>

                    {{-- 本文 --}}
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" value="{{ old('body') }}"></textarea>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="投稿">
                </form>
            </div>
        </div>
    </div>
@endsection