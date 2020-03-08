<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // 自分の投稿一覧画面
        return view('user.mypage.index');
    }

    public function about(Request $request)
    {
        // このサイトについての説明画面
        return view('user.mypage.about');
    }
}
