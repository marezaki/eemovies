@extends('layouts.user')
<link href="{{ asset('css/demand.css') }}" rel="stylesheet">

@section('title', 'リクエスト')

@section('content')
    <div class="main-container">
        <div class="row-top">
            <h2>マイリクエスト</h2>
            <a class="add" href="{{ action('User\DemandController@add') }}">リクエストを送る</a>
        </div>
        <div class="row-table col-md-10">
            <div class="row">
                <table class="table">
                    @foreach($demands as $demand)
                        <div class="card">
                            <p class="card-demand">{{ $demand->demand }}</p>
                            <a class="card-delete" href="{{ action('User\DemandController@delete', ['id' => $demand->id]) }}">削除</a>
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection