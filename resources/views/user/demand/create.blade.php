@extends('layouts.user')
<link href="{{ asset('css/demand.create.css') }}" rel="stylesheet">

@section('title', 'リクエストフォーム')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>リクエストを送る</h2>
        </div>

        <form action="{{ action('User\DemandController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="form-group">
                <label class="tag">リクエスト</label>
                <div class="body">
                    <textarea class="form-control" name="demand" value="{{ old('demand') }}"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="gender">
                    <label class="tag">性別</label>
                </div>
                <label class="comment">任意で選択してください</label>
                <select name="gender">
                    <option></option>
                    <option>男性</option>
                    <option>女性</option>
                    <option>その他</option>
                </select>
            </div>

            <div class="form-group">
                <div class="age">
                    <label class="tag">年齢</label>
                </div>
                <label class="comment">任意で年齢層を選択してください</label>
                <select name="age">
                    <option></option>
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                    <option>70</option>
                    <option>80</option>
                </select>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="button">送　信</button>
        </form>
    </div>
@endsection