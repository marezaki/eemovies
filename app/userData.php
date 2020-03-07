<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userData extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'total' => 'required',
        'happy' => 'required',
        'excited' => 'required',
        'funny' => 'required',
        'sad' => 'required',
        'disguesting' => 'required',
        'scary' => 'required',
        'body' => 'required',
    );
}
