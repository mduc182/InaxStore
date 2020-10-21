@extends('layouts.homelayout')

@section('content')

<div class="banner ">
          <div class="container">
               <div class="menu">
                  <div class="favorite_course">
                          <div class="header">
                              <h3 class="title-blue pdh3"> Trang Sản Phẩm</h3>
                          </div>
                      <div class="category_corse">
                          <ul class="text-center">
                              <li><a href="{{ Route('subindex') }}">Tất cả</a></li>
                              <li><a href="{{ Route('sub1index') }}">Bồn Cầu</a></li>
                              <li><a href="{{ Route('sub2index') }}">Phụ Kiện</a></li>
                              <li><a href="{{ Route('subindex') }}">Đề Xuất</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
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
   
   
@endsection