<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    //

    public function City()
    {
        return $this->belongsTo('App\City');
    }

    public function QCenter()
    {
        return $this->hasMany('App\QCenter');
    }
}
