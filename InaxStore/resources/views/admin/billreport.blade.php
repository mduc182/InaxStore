@extends('layouts.app')

@section('content')
<div class="container">
<h3 style="text-align:center; color: blue;"> Trang Thống Kê Hóa Đơn Nhập<h3>
<br>

<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                        <a href="{{ Route('breport') }}"><h5 style="color:blue; font-family:Roboto; font-weight:bold;">Tổng Đơn Nhập </h5></a>
                                                <br>
                                                {{ $bill_count }}
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <a href="{{ Route('b1report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Đơn Ngày Hôm Nay</h5></a>
                                                <br>
                                             {{ $bill_today }}
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <a href="{{ Route('b2report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Đơn Tháng Này</h5></a>
                                                <br>
                                               {{ $bill_thismonth }} 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->

                    </div>
                    </div>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Mã Hóa Đơn</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Số Lượng</th>
      <th scope="col">Đơn Giá</th>
      <th scope="col">Thành Tiền</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bills as $bill)
    <tr>
      <th scope="row">{{ $bill->id }}</th>
      <td>{{ $bill->product->productname ?? '' }}</td>
      <td>{{ $bill->quantity }}</td>
      <td>{{ $bill->budget }}</td>
      <td>{{ $bill->amount }}</td>
    </tr>
    @endforeach
 
    
  </tbody>
</table>    
                   
@endsection