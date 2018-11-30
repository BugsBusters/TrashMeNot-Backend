<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Negozio extends Model 
{

    protected $table = 'negozi';
    public $timestamps = false;

    //TODO
    /*
    public function user()
    {
        return $this->hasOne('App\Model\User',id);
    }*/

}