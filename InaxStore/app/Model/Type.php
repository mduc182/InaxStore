<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function products()
    {
        return $this->hasmany('App\Model\Product');
    }

    protected $fillable= [
        'typename'
    ];
}
