<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\ReviewData;

class User extends Authenticatable
{
    use Notifiable;

    public static $rules = array(
        'name' => 'required',
    );

    public function reviews()
    {
        return $this->hasMany('App\ReviewData');
    }

    public function demands()
    {
        return $this->hasMany('App\Demand');
    }

    public function favorites()
    {
        return $this->belongsToMany(ReviewData::class, 'favorites', 'user_id', 'review_id')->withTimestamps();
    }

    public function favorite($review_id)
    {
        $exist = $this->is_favorite($review_id);

        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($review_id);
            return true;
        }
    }

    public function unfavorite($review_id)
    {
        $exist = $this->is_favorite($review_id);

        if ($exist) {
            $this->favorites()->detach($review_id);
            return true;
        } else {
            return false;
        }
    }

    public function is_favorite($review_id)
    {
        return $this->favorites()->where('review_id', $review_id)->exists();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nickname', 'twitter_id', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
