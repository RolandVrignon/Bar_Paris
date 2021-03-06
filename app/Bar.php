<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected $fillable = [
        'user_id', 'title', 'description', 'adresse', 'picture', 'flechettes', 'billard', 'flipper', 'baby_foot', 'horaires'

    ];

    /**
     * @return array
     */
}
