<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Demand;
use App\User;
use Illuminate\Support\Facades\Auth;

class DemandController extends Controller
{
    public function add()
    {
        return view('user.demand.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Demand::$rules);

        $demand = new Demand;
        $demand->user_id = $request->user()->id;
        $demand->user_name = $request->user()->name;
        $demand->gender = $request->gender;
        $demand->age = $request->age;
        $demand->demand = $request->demand;
        $demand->save();
        return redirect('/user/demands');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $demands = User::find($user_id)->demands;

        return view('user.demand.index', ['demands' => $demands]);
    }

    public function delete(Request $request)
    {
        $demand = Demand::find($request->id);
        $demand->delete();

        return redirect('user/demands');
    }
}
