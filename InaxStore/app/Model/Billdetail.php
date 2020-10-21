<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    

    public function provider()
    {
        return $this->belongsto('App\Model\Provider');
    }
    public function user()
    {
        return $this->belongsto('App\Model\User');
    }
    public function bill()
    {
        return $this->belongsto('App\Model\Bill');
    } 

    protected $fillable= [
        'user_id', 'provider_id'
    ];
}
