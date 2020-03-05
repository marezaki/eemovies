<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function add()
  {
      return view('user.review.create');
  }

  public function create()
    {
        return redirect('user/review/create');
    }

  public function delete()
  {
      return redirect('user/mypage');
  }

  public function index()
    {
        return view('admin.review.index');
    }

  public function status()
  {
      return redirect('user/review/status');
  }


}
