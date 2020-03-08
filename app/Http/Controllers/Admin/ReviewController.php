<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\reviewData;

class ReviewController extends Controller
{
  public function delete()
  {
    // 投稿の削除
    return redirect('user/mypage');
  }

  public function index()
  {
    // 管理者用のみんなの投稿一覧
    return view('admin.review.index');
  }

  public function status()
  {
    // 他人のレビュー詳細画面
    return redirect('user/review/status');
  }


}
