@extends('layouts.app')

@section('content')
<div class="container">
<h3 style="text-align:center; color: blue;"> Trang Thống Kê Sản Phẩm <h3>
<br>

<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                        <a href="{{ Route('preport') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Tổng Sản Phẩm </h5></a>
                                                <br>
                                                {{ $product_count }}
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <a href="{{ Route('p1report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Loại Bồn Cầu</h5></a>
                                                <br>
                                             {{ $product_bc }} 
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <a href="{{ Route('p2report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Loại Bệ Xí</h5></a>
                                                <br>
                                                {{ $product_bx }}
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    <a href="{{ Route('p3report') }}"><h5 style="color:blue; font-family:Roboto; font-weight:bold;">Loại Phụ Kiện</h5></a>
                                                <br>
                                                {{ $product_pk }}
                                           
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Mã Sản Phẩm</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Chi Tiết</th>
      <th scope="col">Giá Bán</th>
      <th scope="col">Loại Sản Phẩm</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->productname }}</td>
      <td>{{ $product->detail }}</td>
      <td>{{ $product->price }}</td>
      <td>{{ $product->type->typename }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>    
                   
@endsection