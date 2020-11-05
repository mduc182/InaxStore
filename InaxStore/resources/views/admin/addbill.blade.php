@extends('layouts.app')

@section('content')
<div class="container">
<form action="{!! Route('storebill') !!}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Người Nhập Đơn : </label>
                <select class="form-control" id="user_id" name="user_id">
                @foreach ( $users as $user)
                <option value="{!! $user->id !!}">{!! $user->name !!}</option>  
                @endforeach
                </select>
                <br>

                <label>Sản Phẩm : </label>
                <select class="form-control" id="product_id" name="product_id">
                @foreach ( $products as $product)
                <option value="{{ $product->id }}">{{ $product->productname }}</option>  
                @endforeach
                </select>
                <br>

                <label>Nhà Cung Cấp : </label>
                <select class="form-control" id="provider_id" name="provider_id">
                @foreach ( $providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->providername }}</option>  
                @endforeach
                </select>
                <br>
                <br>
                <label>Tổng Tiền : </label>
                <br>
                <br>
                <input  type="text" name="total" class="form-control">
                <br>
                <br>
                
                <input class="btn btn-success" value="Thêm Mới" type="submit" name="btn-add">
            </div>
        </form>
    </div>

</div>
@endsection