<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MovieData;

class MovieController extends Controller
{
    public function add()
    {
        return view('admin.movie.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, MovieData::$rules);

        $movies = new MovieData;
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $movies->image_path = basename($path);
        } else {
            $movies->image_path = null;
        }
        unset($form['_token']);
        unset($form['image']);

        $movies->fill($form);
        $movies->save();

        return redirect('admin/movie/index');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = MovieData::where('title', $cond_title)->get();
        } else {
            $posts = MovieData::all();
        }
        return view('admin.movie.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
        $movies = MovieData::find($request->id);
        if (empty($movies)) {
            abort(404);
        }
        return view('admin.movie.edit', ['movies_form' => $movies]);
    }

    public function update(Request $request)
    {
        $this->validate($request, MovieData::$rules);

        $movies = MovieData::find($request->id);
        $movies_form = $request->all();
        if (isset($movies_form['image'])) {
            $path = $request->file('image')->store('public/image');
            $movies->image_path = basename($path);
            unset($movies_form['image']);
        } elseif (0 == strcmp($request->remove, 'true')) {
            $movies->image_path = null;
        }
        unset($movies_form['_token']);
        unset($movies_form['remove']);

        $movies->fill($movies_form)->save();

        return redirect('admin/movie/index');
    }

    public function delete(Request $request)
    {
        $movies = MovieData::find($request->id);

        $movies->delete();

        return redirect('admin/movie/index');
    }
}
