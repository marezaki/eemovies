<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MovieData;
use Storage;

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
            $path = Storage::disk('s3')->putFile('/', $form['image'], 'public');
            $movies->image_path = Storage::disk('s3')->url($path);
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
            $movies = MovieData::whereRaw('title LIKE ?', "%" . $cond_title . "%")->get();
        } else {
            $movies = MovieData::all();
        }
        return view('admin.movie.index', ['movies' => $movies, 'cond_title' => $cond_title]);
    }

    public function edit(Request $request)
    {
        $movie = MovieData::find($request->id);
        if (empty($movie)) {
            abort(404);
        }
        return view('admin.movie.edit', ['movie' => $movie]);
    }

    public function update(Request $request)
    {
        $this->validate($request, MovieData::$rules);

        $movie = MovieData::find($request->id);
        $movie_form = $request->all();
        if (isset($movie_form['image'])) {
            $path = Storage::disk('s3')->putFile('/', $movie_form['image'], 'public');
            $movie->image_path = Storage::disk('s3')->url($path);
            unset($movie_form['image']);
        } elseif (0 == strcmp($request->remove, 'true')) {
            $movie->image_path = null;
        }
        unset($movie_form['_token']);
        unset($movie_form['remove']);
        $movie->fill($movie_form)->save();

        return redirect('admin/movie/index');
    }

    public function delete(Request $request)
    {
        $movie = MovieData::find($request->id);
        $movie->delete();

        return redirect('admin/movie/index');
    }
}
