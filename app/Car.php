<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = "cars";

    public function owner(){
        return $this->belongsTo('App\Owner');
    }
}
