@extends('layouts.user')
<link href="{{ asset('css/review.create.css') }}" rel="stylesheet">

@section('title', 'レビュー新規作成')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>レビュー新規作成</h2>
        </div>

        <form action="{{ action('User\ReviewController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

            <input type="hidden" name="movie_id" value="{{ app('request')->input('id') }}">

            {{-- 投稿のタイトル --}}
            <div class="form-group">
                <label class="tag">タイトル</label>
                <p class="attention">20文字以内で入力してください</p>
                <div class="title">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
            </div>
            
            {{--  感情指数　--}}
            <div class="form-group">
                <label class="tag">感情指数</label>
                <div class="emotional-all">
                    <div class="emotional">
                        <i class="far fa-smile-beam">
                            <label class="level">喜び度</label>
                        </i>
                        <select name="happy">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="happy">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="emotional">
                        <i class="far fa-grin-squint">
                            <label class="level">楽し度</label>
                        </i>
                        <select name="excited">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="excited">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="emotional">
                        <i class="far fa-grin-squint-tears">
                            <label class="level">笑い度</label>
                        </i>
                        <select name="funny">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="funny">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="emotional">
                        <i class="far fa-sad-tear">
                            <label class="level">悲し度</label>
                        </i>
                        <select name="sad">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="sad">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="emotional">
                        <i class="far fa-angry">
                            <label class="level">怒り度</label>
                        </i>
                        <select name="disgusted">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="disgusted">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="emotional">
                        <i class="far fa-flushed">
                            <label class="level">怖い度</label>
                        </i>
                        <select name="scary">
                            @for($i=0;$i<=9;$i++)
                                <option value='{{ $i }}' name="scary">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            
            {{-- 総合評価 --}}
            <div class="form-group">
                <div class="total">
                    <label class="tag">総合評価</label>
                </div>
                <label class="comment"><span>「 E 」</span>が最も良い評価</label>
                <select name="total">
                    <option value=1>A</option>
                    <option value=2>B</option>
                    <option value=3>C</option>
                    <option value=4>D</option>
                    <option value=5>E</option>
                </select>
            </div>

            {{-- ネタバレ --}}
            <div class="form-group">
                <div class="spoilers">
                    <label class="tag">ネタバレ</label>
                </div>
                <label class="comment">有りか無しか選択してください</label>
                <select name="spoilers">
                    <option value=1>有り</option>
                    <option value=2>無し</option>
                </select>
            </div>

            {{-- 本文 --}}
            <div class="form-group">
                <label class="tag">本文</label>
                <div class="body">
                    <textarea class="form-control" name="body" value="{{ old('body') }}"></textarea>
                </div>
            </div>
            
            {{ csrf_field() }}
            <button type="submit" class="button">投 稿 す る</button>
        </form>
    </div>
@endsection