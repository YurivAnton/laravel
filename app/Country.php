<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function cities()
    {
        return $this->hasMany('App\City');
    }

    public function attractions()
    {
        return $this->hasManyThrough('App\Attraction', 'App\City');
    }
}
