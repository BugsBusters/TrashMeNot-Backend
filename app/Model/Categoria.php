<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model 
{

    protected $table = 'categorie';
    public $timestamps = false;

    public function prodotti()
    {
        return $this->hasMany('App\Model\Prodotto','categorie_id','id');

    }



}
