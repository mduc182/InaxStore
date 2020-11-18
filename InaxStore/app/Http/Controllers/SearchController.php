<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Model\User;
use App\Model\Bill;
use App\Model\Product;
class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        $products = Product::paginate(8);
        $searchterm = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(\App\Model\Product::class, ['productname', 'detail']) //apply search on field name and description
            ->perform($searchterm);

        return view('admin.product', compact('searchResults', 'searchterm', 'products'));
    }

    public function indexu()
    {
        return view('searchu');
    }

    public function searchu(Request $request)
    {
        $users = User::paginate(8);
        $searchuterm = $request->input('query');

        $searchuResults = (new Search())
            ->registerModel(\App\Model\User::class, ['name', 'address', 'birth', 'role', 'phone'])
            ->perform($searchuterm);

        return view('admin/user', compact('searchuResults', 'searchuterm', 'users'));
    }

    public function indexb()
    {
        return view('searchb');
    }

    public function searchb(Request $request)
    {
        $bills = Bill::with([('user'),('product'), ('provider')])->get();
        $searchbterm = $request->input('query');

        $searchbResults = (new Search())
            ->registerModel(\App\Model\Bill::class, ['product_id', 'amount', 'id', 'created_at'])
            ->perform($searchbterm);

        return view('admin.bill', compact('searchbResults', 'searchbterm', 'bills'));
    }
}
