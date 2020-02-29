<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.mypage.edit');
    }

    public function update()
    {
        return redirect('admin/mypage/edit');
    }

    public function index()
    {
        
        return view('admin.mypage.index');
    }
}
