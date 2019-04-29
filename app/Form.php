<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    protected $guarded = ['id'];

    public function car()
    {
        return $this->hasOne('App\Car');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
