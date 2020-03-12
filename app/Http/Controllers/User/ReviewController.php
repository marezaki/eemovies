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
    $this->validate($request, reviewData::$rules);
    
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

  public function index(Request $request)
  {
    $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = reviewData::where('title', $cond_title)->get();
        } else {
            $posts = reviewData::all();
        }

    return view('user.review.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }

  public function mine()
  {
    // 自分のレビュー詳細画面
    return view('user.review.mine');
  }

  public function status(Request $request)
  {
    // 他人のレビュー詳細画面
    $review = reviewData::find($request->id);
    return redirect('user/review/status', ['review' => $review]);
  }
}
