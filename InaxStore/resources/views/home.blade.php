@extends('layouts.homelayout')

@section('content')
<div style="margin-left:60px;">
        <img src="img/capture.png" style="width:1250px;">
</div>
<br>
<br>
<div style="background-color:#e5e5e5;">
            <div class="container pt-2 pb-2">
                <p class="d-inline mr-1"><b>Trang chủ</b></p>
                <p class="d-inline"> > </p>
                <p class="d-inline ml-1" style="color:#8e8e8e;">Sản Phẩm nổi bật</p>
            </div>   
        </div>

        <br>
        <br>

<br>
<br>
<div class="container"> 
 <div class="row"> 
  <div class="row"> 
  </div> 
  <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel"> 
   <div class="carousel-inner"> 
    <div class="item active"> 
     <div class="row"> 
     @foreach($products as $product)
      <div class="col-sm-3"> 
       <div class="col-item"> 
        <div class="photo"> <img src="/images/{{ $product->image }}" style="width:250px; height:200px" class="img-responsive" alt="Sản phẩm 1"> 
        </div> 
        <div class="info"> 
         <div class="row"> 
          <div> 
           <p style="margin-left:10px"><b>Sản Phẩm :{!! $product->productname !!}</b></p> 
           <p style="margin-left:10px" class="price-text-color">Giá :{!! $product->price !!}</p> 
           <p style="margin-left:10px">Mô Tả :{!! $product->detail !!}</p> 

          </div> 
         </div> 
         <div class="separator clear-left"> 
          </p> 
          <a class="btn btn-primary btnhoc" href="{{ Route('showproduct', $product->id) }}">Xem Thông Tin</a>
          </p> 
         </div> 
         <div class="clearfix"> </div> 
        </div> 
       </div> 
      </div> 
      @endforeach
     
      
     </div> 
    </div> 
    
   </div> 
   <br>
   <br>
   {{ $products->links() }}
  </div> 
 </div>
</div>
@endsection
