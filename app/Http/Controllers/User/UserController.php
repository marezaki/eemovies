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
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = ReviewData::where('title', $cond_title)->get();
        } else {
            $posts = ReviewData::all();
        }
        // $user = User::find('id');
        // \Debugbar::info($posts);
        $user_id = Auth::user()->id;
        $posts = User::find($user_id)->reviews;

        return view('user.mypage.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function about(Request $request)
    {
        // このサイトについての説明画面
        return view('user.mypage.about');
    }

    // public function request(Request $request)
    // {
    //     // このサイトについての説明画面
    //     return view('user.mypage.about');
    // }
}
