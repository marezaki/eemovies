<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function about()
    {
        // このサイトについての説明画面
        return view('guest.about');
    }

    public function login()
    {
        // このサイトについての説明画面
        return view('guest.login');
    }

    public function register()
    {
        // このサイトについての説明画面
        return view('guest.register');
    }
}
