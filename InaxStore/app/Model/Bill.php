<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function billdetails()
    {
        return $this->hasmany('App\Model\Billdetail');
    }
    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function provider()
    {
        return $this->belongsTo('App\Model\Provider');
    }

    protected $fillable= [
        'amount', 'total', 'product_id'
    ];
}
