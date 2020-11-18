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
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <form method="get" action="{{ route('searchu.result') }}" class="form-inline mr-auto">
                <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}"
                    class="form-control col-sm-8" placeholder="Nhập Nội Dung Cần Tìm Kiếm" aria-label="Search">
                <button style="margin-left:20px;" class="btn btn-success" type="submit">Tìm Kiếm</button>
            </form>
            <br>
            @if(isset($searchuResults))
            @if ($searchuResults-> isEmpty())
            <h2>Sorry, no results found for the term <b>"{{ $searchuterm }}"</b>.</h2>
            @else
            <h2>Có {{ $searchuResults->count() }} kết quả cho tìm kiếm <b>"{{ $searchuterm }}"</b></h2>
            <hr />
            @foreach($searchuResults->groupByType() as $type => $modelSearchuResults)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Bảng</th>
                        <th scope="col">{{ $type }}</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($modelSearchuResults as $searchuResult)
                    <tr>
                        <th scope="row">#</th>
                        <th><a href="{{ $searchuResult->url }}">{{ $searchuResult->title }}</a></th>
                        <th><a href="{{ $searchuResult->url }}">Xem Chi Tiết</a></th>
                        
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
                          <li class="menu-vertical2"><a style="color:green;" href="{{ route('createbill') }}">Nhập Đơn Hàng Mới</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('userindex') }}">Quản Lý Nhân Viên</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('productindex') }}">Quản Lý Sản Phẩm</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('typeindex') }}">Quản Lý Loại Sản Phẩm</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('billindex') }}">Quản Lý Đơn Nhập Hàng</a></li>
                          <li class="menu-vertical2"><a  href="{{ route('providerindex') }}">Quản Lý Nhà cung cấp</a></li>
                          
                        </ul>
                    </div>
                    
                   
                    <div class="col-md-9">
                        <h1 class="txt-blue" style="font-size: 25px; color:blue"><b>Quản Lý Nhân Viên</b></h1>
                        <br>
                        <a class="btn btn-success" href="{!! Route('createuser') !!}">Thêm Nhân Viên Mới</a>
                     
    
                        <br>
                        <div class="cuocthi-block">
                            <table>
                                  <tr>
                                    <th class="styletb">Mã NV</th>
                                    <th class="styletb">Tên Nhân Viên</th>
                                    <th class="styletb">Địa Chỉ</th>
                                    <th class="styletb">SĐT</th>
                                    <th class="styletb">Ngày Sinh</th>
                                    <th class="styletb">Chức vụ</th>


                                  </tr>
                                  @foreach( $users as $user)
                                  <tr>
                                  
                                    <td class="styletb">{!! $user->id !!}</td>
                                    <td class="styletb">{!! $user->name !!}</td>
                                    <td class="styletb">{!! $user->address !!}</td>
                                    <td class="styletb">{!! $user->phone !!}</td>
                                    <td class="styletb">{!! $user->birth !!}</td>
                                    <td class="styletb">{!! $user->role !!}</td>
                                    <td><a class="btn btn-info" href="{!! Route('edituser', $user->id) !!}">Sửa</a></td>
                                    <td><a class="btn btn-secondary" href="{!! Route('showuser', $user->id) !!}">Xem</a></td>
                                    <td>
                                    <form class="delete" action="{!! Route('deleteuser', $user->id ) !!}" method="post">
                                    <input type="hidden" value="{!! $user->id !!}" name="id">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <input type="submit" value="Xóa" class="btn btn-danger">
                                    </form></td>


                                  </tr>
                                  @endforeach
                                  <script>
                                    $(".delete").on("submit", function(){
                                     return confirm("Bạn Có Chắc Chắn Muốn Xóa ?");
                                     });
                                    </script>
                                  
                            </table>
                            <br>
                          
                        </div>
    
                    </div> 
                </div>
            </div>
            
</div>




@endsection