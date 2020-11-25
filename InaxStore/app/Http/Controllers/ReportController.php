<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Type;
use App\Model\Bill;
use App\Model\User;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_count = Product::count();
        $user_count = User::count();
        $bill_count = Bill::count();

        return view('admin.report', compact('user_count', 'product_count', 'bill_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function ureport()
    {
        $user_count = User::count();
        $user_manage = User::where('role', 'Quản Lý')->count();
        $user_nv = User::where('role', 'Nhân Viên Nhập')->count();
        $user_kho = User::where('role', 'Nhân Viên Kho')->count();
        $users = User::all();

        return view('admin.userreport', compact('user_count', 'user_manage', 'user_nv', 'user_kho', 'users'));
    }

    public function preport()
    {
        $product_count = Product::count();
        $product_bc = Product::where('type_id', '2')->count();
        $product_bx = Product::where('type_id', '1')->count();
        $product_pk = Product::where('type_id', '3')->count();
        $products = Product::with('type')->get();

        return view('admin.productreport', compact('product_count', 'product_bc', 'product_bx', 'product_pk', 'products'));
    }

    public function p1report()
    {
        $product_count = Product::count();
        $product_bc = Product::where('type_id', '2')->count();
        $product_bx = Product::where('type_id', '1')->count();
        $product_pk = Product::where('type_id', '3')->count();
        $products = Product::with('type')->where('type_id', '2')->get();

        return view('admin.product1report', compact('product_count', 'product_bc', 'product_bx', 'product_pk', 'products'));
    }

    public function p2report()
    {
        $product_count = Product::count();
        $product_bc = Product::where('type_id', '2')->count();
        $product_bx = Product::where('type_id', '1')->count();
        $product_pk = Product::where('type_id', '3')->count();
        $products = Product::with('type')->where('type_id', '1')->get();

        return view('admin.product2report', compact('product_count', 'product_bc', 'product_bx', 'product_pk', 'products'));
    }

    public function p3report()
    {
        $product_count = Product::count();
        $product_bc = Product::where('type_id', '2')->count();
        $product_bx = Product::where('type_id', '1')->count();
        $product_pk = Product::where('type_id', '3')->count();
        $products = Product::with('type')->where('type_id', '3')->get();

        return view('admin.product3report', compact('product_count', 'product_bc', 'product_bx', 'product_pk', 'products'));
    }

    public function breport()
    {   
        $bill_count = Bill::count();
        $bills = Bill::with('product')->get();
        $bill_today = Bill::whereDate('created_at', Carbon::today())->count();
        $bill_thismonth = Bill::whereMonth('created_at', date('m'))->count();
        return view('admin.billreport' ,compact('bill_count', 'bills', 'bill_today', 'bill_thismonth'));
    }

    public function b1report()
    {   
        $bill_count = Bill::count();
        $bill_today = Bill::whereDate('created_at', Carbon::today())->count();
        $bill_thismonth = Bill::whereMonth('created_at', date('m'))->count();
        $bills = Bill::whereDate('created_at', Carbon::today())->get();
        return view('admin.bill1report' ,compact('bill_count', 'bills', 'bill_today', 'bill_thismonth'));
    }

    public function b2report()
    {   
        $bill_count = Bill::count();
        $bill_today = Bill::whereDate('created_at', Carbon::today())->count();
        $bill_thismonth = Bill::whereMonth('created_at', date('m'))->count();
        $bills = Bill::whereMonth('created_at', date('m'))->get();
        return view('admin.bill2report' ,compact('bill_count', 'bills', 'bill_today', 'bill_thismonth'));
    }

    public function u1report()
    {
        $user_count = User::count();
        $user_manage = User::where('role', 'Quản Lý')->count();
        $user_nv = User::where('role', 'Nhân Viên Nhập')->count();
        $user_kho = User::where('role', 'Nhân Viên Kho')->count();
        $users = User::where('role', 'Nhân Viên Nhập')->get();

        return view('admin.user1report', compact('user_count', 'user_manage', 'user_nv', 'user_kho', 'users'));
    }

    public function u2report()
    {
        $user_count = User::count();
        $user_manage = User::where('role', 'Quản Lý')->count();
        $user_nv = User::where('role', 'Nhân Viên Nhập')->count();
        $user_kho = User::where('role', 'Nhân Viên Kho')->count();
        $users = User::where('role', 'Nhân Viên Kho')->get();

        return view('admin.user2report', compact('user_count', 'user_manage', 'user_nv', 'user_kho', 'users'));
    }

    public function u3report()
    {
        $user_count = User::count();
        $user_manage = User::where('role', 'Quản Lý')->count();
        $user_nv = User::where('role', 'Nhân Viên Nhập')->count();
        $user_kho = User::where('role', 'Nhân Viên Kho')->count();
        $users = User::where('role', 'Quản Lý')->get();

        return view('admin.user3report', compact('user_count', 'user_manage', 'user_nv', 'user_kho', 'users'));
    }
}
