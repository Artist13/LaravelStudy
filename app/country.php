<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    protected $table = "countrys";

    public function user(){
        return $this->belongsTo('App\User');
    }
}
