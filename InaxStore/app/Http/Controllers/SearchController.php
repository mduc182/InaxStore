<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {

        $searchterm = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(\App\Model\Product::class, ['productname', 'detail']) //apply search on field name and description
            ->perform($searchterm);

        return view('search', compact('searchResults', 'searchterm'));
    }

    public function indexu()
    {
        return view('searchu');
    }

    public function searchu(Request $request)
    {

        $searchuterm = $request->input('query');

        $searchuResults = (new Search())
            ->registerModel(\App\Model\User::class, ['name', 'address', 'birth', 'role', 'phone'])
            ->perform($searchuterm);

        return view('searchu', compact('searchuResults', 'searchuterm'));
    }

    public function indexb()
    {
        return view('searchb');
    }

    public function searchb(Request $request)
    {

        $searchbterm = $request->input('query');

        $searchbResults = (new Search())
            ->registerModel(\App\Model\Bill::class, ['product_id', 'amount', 'total', 'created_at'])
            ->perform($searchbterm);

        return view('searchb', compact('searchbResults', 'searchbterm'));
    }
}
