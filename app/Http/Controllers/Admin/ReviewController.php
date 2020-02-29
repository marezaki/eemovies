<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function add()
  {
      return view('admin.review.create');
  }

  public function create()
    {
        return redirect('admin/review/create');
    }

  public function delete()
  {
      return redirect('admin/mypage');
  }

  public function index()
    {
        return view('admin.review.index');
    }

  public function status()
  {
      return redirect('admin/review/status');
  }


}
