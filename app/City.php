<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
