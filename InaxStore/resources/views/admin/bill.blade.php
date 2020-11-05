@extends('layouts.app')

@section('content')

<div style="background-color:#e5e5e5;">
            <div class="container pt-2 pb-2">
                <p class="d-inline mr-1"><b>Trang chủ</b></p>
                <p class="d-inline"> > </p>
                <p class="d-inline ml-1" style="color:#8e8e8e;">Trang Quản Lý Đơn Nhập Hàng</p>
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
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <form method="get" action="{{ route('searchb.result') }}" class="form-inline mr-auto">
                <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}"
                    class="form-control col-sm-8" placeholder="Nhập Nội Dung Cần Tìm Kiếm" aria-label="Search">
                <button style="margin-left:20px;" class="btn btn-success" type="submit">Tìm Kiếm</button>
            </form>
            <br>
            @if(isset($searchbResults))
            @if ($searchbResults-> isEmpty())
            <h2>Sorry, no results found for the term <b>"{{ $searchbterm }}"</b>.</h2>
            @else
            <h2>Có {{ $searchbResults->count() }} kết quả cho tìm kiếm <b>"{{ $searchbterm }}"</b></h2>
            <hr />
            @foreach($searchbResults->groupByType() as $type => $modelSearchbResults)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Bảng</th>
                        <th scope="col">{{ $type }}</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($modelSearchbResults as $searchbResult)
                    <tr>
                        <th scope="row">#</th>
                        <th><a href="{{ $searchbResult->url }}">{{ $searchbResult->title }}</a></th>
                        <th><a href="{{ $searchbResult->url }}">Xem Chi Tiết</a></th>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            
             
            @endforeach
            @endif
            @endif
        </div>
    </div>
</div>
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
                        <h1 class="txt-blue" style="font-size: 25px; color:blue"><b>Quản Lý Đơn Nhập Hàng</b></h1>
                        <br>
                        <a class="btn btn-success" href="{{ route('createbill') }}">Thêm Đơn Nhập Hàng Mới</a>
                        <a class="btn btn-secondary" href="{{ route('searchb.index') }}">Tìm Đơn Nhập Hàng </a>
    
                        <br>
                        <div class="cuocthi-block">
                            <table>
                                  <tr>
                                    <th class="styletb">Mã Hóa Đơn</th>
                                    <th class="styletb">Người Nhập Đơn</th>
                                    <th class="styletb">Tên Sản Phẩm</th>
                                    <th class="styletb">Tên Nhà Cung Cấp</th>
                                    <th class="styletb">Số Lượng</th>
                                    <th class="styletb">Tổng Tiền</th>
                                    <th class="styletb">Ngày Nhập</th>
                                    


                                  </tr>
                                  @foreach( $bills as $bill)
                                  <tr>
                                  
                                    <td class="styletb">{!! $bill->id !!}</td>
                                    <td class="styletb">{{ $bill->user->name ?? '' }}</td>
                                    <td class="styletb">{{ $bill->product->productname ?? '' }}</td>
                                    <td class="styletb">{{ $bill->provider->providername ?? '' }}</td>
                                    <td class="styletb">{!! $bill->product->amount ?? '' !!}</td>
                                    <td class="styletb">{!! $bill->total !!}</td>
                                    <td class="styletb">{!! $bill->created_at !!}</td>
                                    
                                   


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