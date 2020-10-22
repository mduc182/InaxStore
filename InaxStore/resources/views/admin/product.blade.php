@extends('layouts.app')

@section('content')

<div style="background-color:#e5e5e5;">
            <div class="container pt-2 pb-2">
                <p class="d-inline mr-1"><b>Trang chủ</b></p>
                <p class="d-inline"> > </p>
                <p class="d-inline ml-1" style="color:#8e8e8e;">Trang Quản Lý Nhân Viên</p>
            </div>   
        </div>
<br>
@if(isset($mess))
            <p class="alert alert-success">Thêm Thành Công</p>
        @endif
        @if(session('messdel'))
            <p class="alert alert-success">Xóa Thành Công</p>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p class="alert alert-danger" >Thêm Không Thành Công</p>
            @endforeach
        @endif
<br>

        <div class="container mgtcourse">
            <div class="">
                <div class="row">
                    <div class="card col-md-3 menu-vertical-mgt" style="height:350px;">
                        <ul class="menu-vertical">
                          <li class="menu-vertical2 font-weight-bold" style="padding: 6px 16px; margin-top: 12px;">Danh mục quản lý</li>
                          <hr>
                          <li class="menu-vertical2"><a style="color:green;"  href="{{ route('createbill') }}">Nhập Đơn Hàng Mới</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('userindex') }}">Quản Lý Nhân Viên</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('productindex') }}">Quản Lý Sản Phẩm</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('typeindex') }}">Quản Lý Loại Sản Phẩm</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('billindex') }}">Quản Lý Đơn Nhập Hàng</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('providerindex') }}">Quản Lý Nhà cung cấp</a></li>
                          
                        </ul>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <h1 class="txt-blue" style="font-size: 25px; color:blue"><b>Quản Lý Sản Phẩm</b></h1>
                        <br>
                        <a class="btn btn-success" href="{!! Route('createproduct') !!}">Thêm Loại Sản Phẩm Mới</a>
                        <a class="btn btn-secondary" href="{!! Route('search.index') !!}">Tìm Kiếm Sản Phẩm</a>
                        <br>
                        <div class="cuocthi-block">
                            <table>
                                  <tr>
                                    <th class="styletb">Mã Sản Phẩm</th>
                                    <th class="styletb">Tên Sản Phẩm</th>
                                    <th class="styletb">Giá Bán</th>
                                    <th class="styletb">Số Lượng</th>
                                    <th class="styletb">Loại</th>


                                  </tr>
                                  @foreach( $products as $product)
                                  <tr>
                                    <td class="styletb">{!! $product->id !!}</td>
                                    <td class="styletb">{!! $product->productname !!}</td>
                                    <td class="styletb">{!! $product->price !!}</td>
                                    <td class="styletb">{!! $product->amount !!}</td>
                                    <td class="styletb">{!! $product->type_id !!}</td>
                                    <td><a class="btn btn-info" href="{{ Route('editproduct', $product->id) }}">Sửa</td>
                                    <td>
                                    <form action="{!! Route('deleteproduct', $product->id ) !!}" method="post">
                                    <input type="hidden" value="{!! $product->id !!}" name="id">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <input type="submit" value="Xóa" class="btn btn-danger">
                                    </form></td>


                                  </tr>
                                  @endforeach
                                 
                                  
                            </table>
                            <br>
                         
                        </div>
    
                    </div> 
                </div>
            </div>
</div>


@endsection