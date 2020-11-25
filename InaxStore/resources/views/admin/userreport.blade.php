@extends('layouts.app')

@section('content')
<div class="container">
<h3 style="text-align:center; color: blue;"> Trang Thống Kê Nhân Viên <h3>
<br>

<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                                <h5 style="color:blue; font-family:Roboto; font-weight:bold;">Tổng NV </h5>
                                                <br>
                                                {{ $user_count }}
                                            
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
                                        <a href="{{ Route('u1report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Số NV Nhập Đơn</h5></a>
                                                <br>
                                             {{ $user_nv }} 
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
                                    <a href="{{ Route('u2report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Số NV Kho</h5></a>
                                                <br>
                                                {{ $user_kho }}
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
                                    <a href="{{ Route('u3report') }}"><h5 style="color:green; font-family:Roboto; font-weight:bold;">Số Quản Lý</h5></a>
                                                <br>
                                                {{ $user_manage }}
                                           
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
                    </div>
                    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Mã Nhân Viên</th>
      <th scope="col">Tên Nhân Viên</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Điện Thoại</th>
      <th scope="col">Ngày Sinh</th>
      <th scope="col">Chức Vụ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->phone }}</td>
      <td>{{ $user->birth }}</td>
      <td>{{ $user->role }}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
                    
                   
@endsection