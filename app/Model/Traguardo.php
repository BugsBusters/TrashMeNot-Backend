<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Traguardo extends Model 
{

    protected $table = 'traguardi';
    public $timestamps = false;

    public function badge()
    {
        return $this->hasOne('App\Model\Badge','badge_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

}