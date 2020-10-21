<?php

namespace App\Http\Controllers;
use App\Model\Type;
use Illuminate\Http\Request;
use App\Http\Requests\TypeFormRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $types = Type::paginate(8);
        return view('admin.type', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.addtype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeFormRequest $request)
    {
        $types = new Type();
        $types->typename = $request->get('typename');
        $mess = "";
        if($types->save())
        {
            $mess = ("Thêm Thành Công");
        }
        $types = Type::all();
        
        return view('admin.type', compact('types'))->with(('mess'), $mess);
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
        $types = Type::findOrfail($id);

        return view('admin.edittype',compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeFormRequest $request, $id)
    {
        $types = Type::findOrfail($id);
        $types->typename = $request->get('typename');
        if($types->save())
        {
            $mess = "Sửa thành công";
        }

        return view('admin.edittype', compact('types'))->with(('mess'), $mess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $types = Type::findOrfail($request->get('id'));
        $types->delete();
        
        return redirect('admin/type')->with(('messdel'), ('messdel'));
    }
}
