<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\movieData;
use App\reviewData;
use App\User;

class ReviewController extends Controller
{
    public function add(Request $request)
  {
    return view('user.review.create');
  } 

  public function create(Request $request)
  {
    $review = new reviewData;
    $review->user_id = $request->user()->id;
    $review->movie_id = $request->movie_id;
    $review->title = $request->title;
    $review->total = $request->total;
    $review->happy = $request->happy;
    $review->excited = $request->excited;
    $review->funny = $request->funny;
    $review->sad = $request->sad;
    $review->disgusted = $request->disgusted;
    $review->scary = $request->scary;
    $review->body = $request->body;
    $review->save();
    return redirect('/user/mypage');
  }

  public function delete()
  {
    // 自分の投稿の削除
    return redirect('user/mypage');
  }

  public function index()
  {
    // みんなの投稿一覧画面
    return view('user.review.index');
  }

  public function mine()
  {
    // 自分のレビュー詳細画面
    return view('user.review.mine');
  }

  public function status()
  {
    // 他人のレビュー詳細画面
    return redirect('user/review/status');
  }
}
