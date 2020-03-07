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

                    {{-- 投稿のタイトル --}}
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                    {{--  感情指数　--}}
                    <div class="form-group row">
                        <label class="col-md-2">感情指数</label>

                            <p>喜</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="happy">{{ $i }}</option>
                                @endfor
                            </select>
                            <p>楽</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="excited">{{ $i }}</option>
                                @endfor
                            </select>
                            <p>笑</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="funny">{{ $i }}</option>
                                @endfor
                            </select>
                            <p>悲</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="sad">{{ $i }}</option>
                                @endfor
                            </select>
                            <p>怒</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="disguested">{{ $i }}</option>
                                @endfor
                            </select>
                            <p>怖</p>
                            <select name="emotion">
                                @for($i=0;$i<=10;$i++)
                                    <option value='{{ $i }}' name="scary">{{ $i }}</option>
                                @endfor
                            </select>
                    </div>
                    
                    {{-- 総合評価 --}}
                    <div class="form-group row">
                        <label class="col-md-2">総合評価</label>
                        <select name="emotion">
                        <option value=1>A</option>
                        <option value=2>B</option>
                        <option value=3>C</option>
                        <option value=4>D</option>
                        <option value=5>E</option>
                        </select>
                        <p>「E」が最も良い評価になります！</p>
                    </div>

                    {{-- グラフを表示 --}}

                    

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