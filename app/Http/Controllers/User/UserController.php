<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReviewData;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // 自分の投稿一覧画面
        $user_id = Auth::user()->id;
        $reviews = User::find($user_id)->reviews;

        return view('user.mypage.index', ['reviews' => $reviews]);
    }

    public function about()
    {
        // このサイトについての説明画面
        return view('user.mypage.about');
    }
}
