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
        $reviews = null;
        if ($cond_title != '') {
            $reviews = ReviewData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $reviews = ReviewData::all()->sortByDesc('updated_at');
        }

        return view('guest.review.index', ['reviews' => $reviews, 'cond_title' => $cond_title]);
    }

    public function status(Request $request)
    {
        // 他人のレビュー詳細画面
        $review = ReviewData::find($request->id);

        return view('guest/review/status', ['review' => $review]);
    }
}
