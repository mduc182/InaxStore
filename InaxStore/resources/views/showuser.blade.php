@extends('layouts.homelayout')

@section('content')
<h2 style="margin-left:100px">Chi Tiết Người Dùng </h2>
<div class="c_product_grid_details">
    <div class="c_product_item">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <br>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="c_product_text" style="margin-left:100px;">
                    <br>
                    <h3>Tên Người Dùng :{!! $users -> name
                            !!}</a></h3>
                            <br>
                            <br>
                    <h5>Email :{!! $users -> email !!}</h5>
                    <br>
                    <br>

                    <h6>Địa Chỉ :{!! $users -> address !!}</h6>
                    <br>
                    <br>

                    <h6>Số Điện Thoại :{!! $users -> phone !!}</h6>
                    <br>
                    <br>

                    <h6>Ngày Sinh :{!! $users -> birth !!}</h6>
                    <br>
                    <br>

                    <h6>Chức Vụ :{!! $users -> role !!}</h6>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection