<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MovieData;
use App\ReviewData;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != null) {
            $posts = MovieData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $posts = MovieData::all();
        }
        \Debugbar::info($cond_title);
        return view('user.movie.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function status(Request $request)
    {
        $movies = MovieData::find($request->id);

        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = ReviewData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $posts = ReviewData::all();
        }
        // $user_id = Auth::user()->id;
        // \Debugbar::info($user_id);
        // $movie_id = MovieData::find('id');
        // $posts = MovieData::find($movie_id);

        return view('user.movie.status', ['movies' => $movies, 'posts' => $posts]);
    }
}
