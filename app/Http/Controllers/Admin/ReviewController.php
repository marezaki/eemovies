<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use App\reviewData;

class ReviewController extends Controller
{
    public function add()
  {
    return view('user.review.create');
  } 

  public function create(Request $request)
    {
      $this->validate($request, reviewData::$rules);

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

  public function show()
  {
      return view('user.review.show');
  }

  public function status()
  {
      return redirect('user/review/status');
  }


}
