<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name','description','price','publish'
    ];

    public function form() {
        return $this->belongsTo('App\Form');
    }

    public function getMinPrice() {
        return $this::min('price');
    }

    public function getMaxPrice() {
        return $this::max('price');
    }
}
