<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function about(Request $request)
    {
        // このサイトについての説明画面
        return view('guest.about');
    }

    public function login(Request $request)
    {
        // このサイトについての説明画面
        return view('guest.login');
    }
}
