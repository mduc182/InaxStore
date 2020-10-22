@extends('layouts.homelayout')

@section('content')
<h2 style="margin-left:100px">Chi Tiết Đơn Nhập </h2>
<div class="c_product_grid_details">
    <div class="c_product_item">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <br>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="c_product_text" style="margin-left:100px;">
                    <br>
                    <h3>Mã Hóa Đơn :{!! $bills -> id
                            !!}</a></h3>
                            <br>
                            <br>
                    <h5>Sản Phẩm :{!!  $bills->product->productname !!}</h5>
                    <br>
                    <br>

                    <h6>Số Lượng :{!!  $bills->amount !!}</h6>
                    <br>
                    <br>

                    <h6>Tổng Tiền :{!!  $bills->id !!}</h6>
                    <br>
                    <br>

                    <h6>Nhà cung cấp :{!!  $bills->provider->providername !!}</h6>
                    <br>
                    <br>

                    <h6>Người Nhập :{!! $bills->user->name !!}</h6>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection