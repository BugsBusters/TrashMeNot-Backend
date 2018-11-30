<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model 
{

    protected $table = 'badge';
    public $timestamps = false;

    public function traguardo()
    {
        return $this->hasOne('App\Model\Traguardo');
    }

}