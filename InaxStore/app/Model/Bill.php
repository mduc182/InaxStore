<?php

namespace App\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model implements Searchable
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

    public function getSearchResult(): SearchResult
    {
        $url = route('showbill', $this->id);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    protected $fillable= [
        'amount', 'total', 'product_id'
    ];
}
