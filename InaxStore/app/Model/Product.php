<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function type()
    {
        return $this->belongsTo('App\Model\Type');
    }

    public function bills()
    {
        return $this->hasmany('App\Model\Bill');
    }

    protected $fillable = [
        'productname', 'detail', 'price', 'amount', 'type_id'
        ];
    
}
