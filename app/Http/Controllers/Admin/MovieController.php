<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function add()
    {
        return view('admin.movie.create');
    }
  
    public function create()
    {
        return redirect('admin/movie/create');
    }

    public function edit()
    {
        return view('admin.movie.edit');
    }

    public function delete()
    {
        return redirect('admin/movie');
    }

    public function uodate()
    {
        return redirect('admin/movie');
    }
  
    public function index()
    {
        return view('admin.movie.index');
    }
  
}
