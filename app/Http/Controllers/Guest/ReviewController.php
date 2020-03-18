<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReviewData;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = ReviewData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $posts = ReviewData::all();
        }

        return view('guest.review.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function status(Request $request)
    {
        // 他人のレビュー詳細画面
        $review = ReviewData::find($request->id);

        return view('guest/review/status', ['review' => $review]);
    }
}
