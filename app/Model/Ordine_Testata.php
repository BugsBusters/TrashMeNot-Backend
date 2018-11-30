<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ordine_Testata extends Model 
{

    protected $table = 'ordini_testata';
    public $timestamps = false;

    public function dettagli()
    {
        return $this->hasMany('App\Model\Ordini_Dettagli','testata_id','id');
    }


}
