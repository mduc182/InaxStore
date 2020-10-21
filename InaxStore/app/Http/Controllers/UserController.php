<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Product;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(8);
        
        return view('admin/user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('admin/adduser', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->address = $request->get('address');
        $users->phone = $request->get('phone');
        $users->birth = $request->get('birth');
        $users->role = $request->get('role');
        $mess = "";
        if($users->save())
        {
            $mess = "Thêm Thành Công ";
        }
        $users = User::all();

        return view('admin.user', compact('users'))->with(trans('mess'), $mess);
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
        $users = User::findOrfail($id);

        return view('admin.edituser',compact('users'));
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
        $users = User::findOrfail($id);
        $users->name = $request->get('name');
        $users->address = $request->get('address');
        $users->phone = $request->get('phone');
        $users->birth = $request->get('birth');
        $users->role = $request->get('role');
        if($users->save())
        {
            $mess = "Sửa thành công";
        }

        return view('admin.edituser', compact('users'))->with(('mess'), $mess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $users = User::findOrfail($request->get('id'));
        $users->delete();
        
        return redirect('admin/user')->with(('messdel'), trans('messdel'));
    }
}
