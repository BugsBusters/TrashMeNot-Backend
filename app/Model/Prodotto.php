<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model 
{

    protected $table = 'prodotti';
    public $timestamps = false;


    public function rate()
    {
        return $this->hasMany('App\Model\Rate','prodotti_id','id');
    }


}

