<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant','area_restaurants');
    }
}
