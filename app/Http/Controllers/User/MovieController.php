<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MovieData;
use App\ReviewData;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        $movies = null;
        if ($cond_title != null) {
            $movies = MovieData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $movies = MovieData::all();
        }

        return view('user.movie.index', ['movies' => $movies, 'cond_title' => $cond_title]);
    }

    public function status(Request $request)
    {
        $movie = MovieData::find($request->id);
        $reviews = ReviewData::all();

        return view('user.movie.status', ['movie' => $movie, 'reviews' => $reviews]);
    }
}
