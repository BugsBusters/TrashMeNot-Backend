<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Negozio extends Model 
{

    protected $table = 'negozi';
    public $timestamps = false;

    public function prodotti()
    {
        return $this->hasMany('App\Model\Prodotto','commerciante_id','id');
    }

}
