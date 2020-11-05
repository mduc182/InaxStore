<?php

namespace App\Http\Controllers;
use App\Model\Bill;
use App\Model\User;
use App\Model\Provider;
use App\Model\Product;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public $users;
    public $providers;
    public $products;

    public function __construct()
    {
        $this->providers = Provider::all();
        $this->users = User::all();
        $this->products = Product::all();

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::with([('user'),('product'), ('provider')])->get();

        return view('admin.bill', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bills = Bill::with([('user'),('product'), ('provider')])->get();
        $users = $this->users;
        $providers = $this->providers;
        $products = $this->products;

        return view('admin.addbill', compact('bills', 'users', 'products', 'providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = $this->users;
        $providers = $this->providers;
        $bills = new Bill();
        $bills->product_id = $request->get('product_id');
        $bills->user_id = $request->get('user_id');
        $bills->provider_id = $request->get('provider_id');
        $bills->total = $request->get('total');
        $mess= "";
        if($bills->save())
        {
            $mess = "Thêm Thành Công";
        }
        $bills = Bill::all();

        return view('admin.bill', compact('bills', 'users', 'providers'))->with('mess', $mess);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bills = Bill::with([('user'),('product'), ('provider')])->findOrfail($id);
        

        return view('showbill', compact('bills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
