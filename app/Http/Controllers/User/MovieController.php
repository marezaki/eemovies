<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MovieData;

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
        $items = MovieData::find($request->id);
        return view('user.movie.status', ['items' => $items]);
    }
}
