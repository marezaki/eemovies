@extends('layouts.user')
@section('title', 'レビュー詳細')

@section('content')
    <div class="container">
        <div class="row">
            <h2>レビュー詳細</h2>
        </div>

        <div class="row">
            <form action="{{ action('User\ReviewController@status') }}">
                <div class="form-group row">
                <label class="col-md-2" for="title">タイトル</label>
                {{ $review->title }}
            </div>
                
            </form>
        </div>
    </div>
@endsection