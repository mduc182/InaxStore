<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function billdetails()
    {
        return $this->hasmany('App\Model\Billdetail');
    }

    public function bills()
    {
        return $this->hasmany('App\Model\Bill');
    }

    protected $fillable= [
        'providername'
    ];
}
