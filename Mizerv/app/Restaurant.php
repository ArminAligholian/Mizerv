<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function areas()
    {
        return $this->belongsToMany('App\Area','area_restaurants');
    }
}
