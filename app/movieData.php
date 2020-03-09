<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movieData extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'director' => 'required',
        'actor' => 'required',
        'description' => 'required',
        'year' => 'required',
        'type' => 'required',
        'country' => 'required',
    );

    public function movies()
    {
        return $this->hasMany('App\movieData');
    }
}
