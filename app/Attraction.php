<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function descriptions()
    {
        return $this->hasOne('App\Description');
    }
}
