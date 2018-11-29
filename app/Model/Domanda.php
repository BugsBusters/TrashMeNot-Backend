<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Domanda extends Model 
{

    protected $table = 'domande';
    public $timestamps = false;

    public function risposte()
    {
        return $this->hasMany('App\Model\Risposta','domande_id','id');
    }
}