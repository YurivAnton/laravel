<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function attraction()
    {
        return $this->belongsTo('App\Attraction');
    }
}
