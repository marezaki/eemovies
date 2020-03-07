<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviewData extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'total' => 'required',
        'emotion' => 'required',
        'body' => 'required',
    );
}
