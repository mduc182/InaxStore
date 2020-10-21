@extends('layouts.homelayout')

@section('content')
<h2 style="margin-left:100px">Chi Tiết Sản Phẩm </h2>
<div class="c_product_grid_details">
    <div class="c_product_item">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <br>
                <div class="c_product_img">

                    <img class="img-fluid" style="margin-left:100px;" src="/images/{!! $products->image !!}" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="c_product_text" style="margin-left:100px;">
                    <br>
                    <h3><a href="{!! Route('showproduct', $products->id) !!}">Tên Sản Phẩm :{!! $products -> productname
                            !!}</a></h3>
                            <br>
                            <br>
                    <h5>Giá Bán :{!! $products -> price !!}</h5>
                    <br>
                    <br>

                    <h6>Hãng sản xuất : Inax</h6>
                    <br>
                    <br>

                    <h6>Mô Tả :{!! $products -> detail !!}</h6>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection