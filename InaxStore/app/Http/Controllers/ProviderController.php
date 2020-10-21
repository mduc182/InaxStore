<?php

namespace App\Http\Controllers;
use App\Model\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProviderFormRequest;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers= Provider::all();
        return view('admin.provider', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all();

        return view('admin.addprovider', compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderFormRequest $request)
    {
        $providers = new Provider();
        $providers->providername = $request->get('providername');
        $mess = "";
        $providers->save();
        
        $providers = Provider::all();
        
        return view('admin.provider', compact('providers'))->with(('mess'), $mess);
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
        $providers = Provider::findOrfail($id);

        return view('admin.editprovider', compact('providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderFormRequest $request, $id)
    {
        $providers = Provider::findOrfail($id);
        $providers->providername = $request->get('providername');

        if($providers->save())
        {
            $mess= "Sửa thành công";
        }

        return view('admin.editprovider', compact('providers'))->with(('mess'), $mess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $providers = Provider::findOrfail($request->get('id'));
        
        $providers->delete();  

        return redirect('admin/provider')->with(('messdel'), trans('messdel'));
    }
}
