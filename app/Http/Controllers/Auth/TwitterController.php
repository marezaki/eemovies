<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\userData;

class TwitterController extends Controller
{
    
    public function add()
    {
        return view('user.twitter.login');
    }

    // ログイン
    public function redirectToProvider()
    {
        $user = Socialite::driver('twitter')->redirect();
        return $user;
    }
    
    // コールバック
    public function handleProviderCallback(Request $request)
    {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        $user = userData::where('auth_id', $twitterUser->id)->first();
        if (!$user) {
            $user = userData::create([
                'auth_id' => $twitterUser->id
                ]);
        }
        Auth::login($user);
        return redirect('/');
    }

    // ログアウト
    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('user/login');
    }

}
