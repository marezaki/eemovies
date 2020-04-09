<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ReviewData extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'total' => 'required',
        'happy' => 'required',
        'excited' => 'required',
        'funny' => 'required',
        'sad' => 'required',
        'disgusted' => 'required',
        'scary' => 'required',
        'body' => 'required',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function movie()
    {
        return $this->belongsTo('App\MovieData');
    }

    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'review_id', 'user_id')->withTimestamps();
    }
}
