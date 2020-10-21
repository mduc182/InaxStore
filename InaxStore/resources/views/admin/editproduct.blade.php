@extends('layouts.app')

@section('content')
<div class="container">
        <h3><p>Sửa Thông Tin Sản Phẩm</p></h3>
        @if(isset($mess))
            <p class="alert alert-success">{!! $mess !!}</p>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{!! $error !!}</p>
            @endforeach
        @endif
        
        <form action="{!! Route('updateproduct', $products->id) !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Sản Phẩm</label>
                <input type="text" name="productname" value="{!! $products->productname !!}" class="form-control">
                <br>
                <label>Mô Tả</label>
                <input type="text" name="detail" value="{!! $products->detail !!}" class="form-control">
                <br>
                <label>Giá Bán</label>
                <input type="text" name="price" value="{!! $products->price !!}" class="form-control">
                <br>
                <label>Số Lượng</label>
                <input type="text" name="amount" value="{!! $products->amount !!}" class="form-control">
                <br>
                <label>Loại Sản Phẩm</label>
                <select class="form-control" id="type_id" name="type_id">

                    @foreach($types as $type)
                        <option value="{!! $type->id !!}">{!! $type->typename !!}</option>
                    @endforeach
                </select>
                <br>
                <input class="btn btn-success" value="Sửa" type="submit" name="btn-edit">
            </div>
        </form>

    </div>


@endsection