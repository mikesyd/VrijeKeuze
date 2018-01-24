<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = "owners";

    public function cars(){
        return $this->hasMany('App\Car');
    }
}
