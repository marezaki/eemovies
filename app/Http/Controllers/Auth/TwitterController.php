<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\userData;

class TwitterController extends Controller
{
    
    public function add()
    {
        return view('admin.twitter.login');
    }

    // ログイン
    public function redirectToProvider()
    {
        $user = Socialite::driver('twitter')->redirect();
        return $user;
    }
    
    // コールバック
    public function handleProviderCallback()
    {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        
        $user = User::where('auth_id', $twitterUser->id)->first();
        if (!$user) {
            $user = User::create([
                'auth_id' => $twitterUser->id
                ]);
        }
        Auth::login($user);
        return redirect('/');
        //userDataに保存するコードを書く
    }

    // ログアウト
    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }

}
