@extends('layouts.app')

@section('content')
<div class="container">
<h3 style="text-align:center; color: blue;"> Trang Thống Kê Truy Cập <h3>
<br>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Đang Online</th>
      <th scope="col">Trong Ngày</th>
      <th scope="col">Trong Tuần</th>
      <th scope="col">Trong Tháng</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2</td>
      <td>23</td>
      <td>63</td>
    </tr>
    
  </tbody>
</table>
                    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h4 style="color:blue;">Danh Mục Thống Kê</h4>
    <div class="media text-muted pt-3">
     
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <a href="{{ Route('ureport') }}"><strong class="text-gray">Nhân Viên</strong></a>
          <a href="{{ Route('ureport') }}">Xem</a>
        </div>
        <span class="d-block">Thống kê theo số lượng, tên, chức vụ</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
        <a href="{{ Route('preport') }}"><strong class="text-gray-dark">Sản Phẩm</strong></a>
          <a href="{{ Route('preport') }}">Xem</a>
        </div>
        <span class="d-block">Thống kê theo số lượng, loại hàng, thành tiền</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
    
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
        <a href="{{ Route('breport') }}"><strong class="text-gray-dark">Đơn Nhập</strong></a>
          <a href="{{ Route('breport') }}">Xem</a>
        </div>
        <span class="d-block">Thống kê theo ngày nhập, người nhập</span>
      </div>
    </div>

  </div>
                    </div>
                    </div>
                    </div>
                   
@endsection