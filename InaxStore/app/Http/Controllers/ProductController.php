<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Type;

class ProductController extends Controller
{
    public $types;

    public function __construct()
    {
        $this->types = Type::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('admin.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::with('type')->get();
        $types = $this->types;
       
        return view('admin.addproduct', compact('products', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $products = new Product();
        $products->productname = $request->get('productname');
        $products->detail = $request->get('detail');
        $products->price = $request->get('price');
        $products->amount = $request->get('amount');
        $products->image = $request->get('image');
        $products->type_id = $request->get('type_id');
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $products->image = $imageName;

        $mess = "";
        if($products->save())
        {
            $mess = " Thêm Thành Công";
        }
        $products = Product::all();

        return view('admin.product', compact('products'))->with('mess', $mess);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrfail($id);
        // dd($products);

        return view('showproduct', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrfail($id);
        $types = $this->types;

        return view('admin.editproduct',compact('products', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {   
        $types = $this->types;
        $products = Product::findOrfail($id);
        $products->productname = $request->get('productname');
        $products->detail = $request->get('detail');
        $products->price = $request->get('price');
        $products->amount = $request->get('amount');
        $products->type_id = $request->get('type_id');
        
        if($products->save())
        {
            $mess = "Sửa thành công";
        }

        return view('admin.editproduct', compact('products', 'types'))->with(('mess'), $mess);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $products = Product::findOrfail($request->get('id'));
        $products->delete();       

        return redirect('admin/product')->with(('messdel'), ('messdel'));
    }
}
