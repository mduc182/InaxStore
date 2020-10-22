<?php

namespace App\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Searchable
{
    
    public function type()
    {
        return $this->belongsTo('App\Model\Type');
    }

    public function bills()
    {
        return $this->hasmany('App\Model\Bill');
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('showproduct', $this->id);

        return new SearchResult(
            $this,
            $this->productname,
            $url
        );
    }

    protected $fillable = [
        'productname', 'detail', 'price', 'amount', 'type_id'
        ];
    
}
