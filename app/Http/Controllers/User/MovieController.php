<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\movieData;
use App\User;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = movieData::where('title', $cond_title)->get();
        } else {
            $posts = movieData::all();
        }

        return view('user.movie.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function status(Request $request)
    {
        $items = movieData::find($request->id);
        return view('user.movie.status', ['items' => $items]);
    }
}
