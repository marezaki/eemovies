<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function add()
  {
    return view('user.review.create');
  } 

  public function create(Request $request)
  {
    // 投稿の新規作成
    $this->validate($request, reviewData::$rules);

    return redirect('user/review/create');
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
