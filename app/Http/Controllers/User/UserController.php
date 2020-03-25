<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // 自分の投稿一覧
        $user_id = Auth::user()->id;
        $reviews = User::find($user_id)->reviews;

        return view('user.mypage.index', ['reviews' => $reviews]);
    }

    public function about()
    {
        // このサイトについての説明
        return view('user.mypage.about');
    }

    public function edit()
    {
        // ユーザー編集
        $user_name = Auth::user()->name;
        $user_id = Auth::user()->id;
        if (empty($user_name)) {
            abort(404);
        }
        return view('user.mypage.edit', ['user_name' => $user_name, 'user_id' => $user_id]);
    }

    public function update(Request $request)
    {
        //　ユーザー編集の更新
        $this->validate($request, User::$rules);

        $user = Auth::user($request->name);
        $user_form = $request->all();

        unset($user_form['_token']);
        unset($user_form['remove']);
        $user->fill($user_form);
        $user->save();

        return redirect('user/mypage');
    }
}
