<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function user(){
        return $this->belongsTo('App\user');
    }
}
