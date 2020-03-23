<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'demand' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
