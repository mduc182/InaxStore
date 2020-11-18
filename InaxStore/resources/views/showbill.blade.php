@extends('layouts.homelayout')

@section('content')
<h2 style="margin-left:100px">Trang Chi Tiết Đơn Nhập </h2>
<div class="c_product_grid_details">
    <div class="c_product_item">
        <div class="row">
            <div class="col-md-4">
                <br>
                <div class="c_product_img">

                    <img class="img-fluid" style="margin-left:100px;" src="/images/{!! $bills->product->image !!}" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="c_product_text" style="margin-left:100px;">
                    <br>
                    <h3>Mã Hóa Đơn :{!! $bills -> id
                            !!}</a></h3>
                            <br>
                            <br>
                    <h5>Sản Phẩm :{!!  $bills->product->productname ?? '' !!}</h5>
                    <br>
                    <br>

                    <h6>Nhà cung cấp :{!!  $bills->provider->providername ?? '' !!}</h6>
                    <br>
                    <br>

                    <h6>Số Lượng :{!!  $bills->quantity ?? '' !!}</h6>
                    <br>
                    <br>

                    <h6>Tổng Tiền :{!!  $bills->amount !!}</h6>
                    <br>
                    <br>

                    
 

                </div>
            </div>
            <div class="col-md-4">
                <br>
                <a href="{{ route('editbill', $bills->id) }}" class="btn btn-info">Sửa Đơn Hàng</a>
                <br>
                <br>
                <a href="{{ route('billindex') }}" class="btn btn-success">Lưu Thông Tin</a>
            </div>
        </div>
    </div>

</div>



@endsection