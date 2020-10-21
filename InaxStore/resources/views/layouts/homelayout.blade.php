<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>InaxStore</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <style> 
    .col-item { 
border: 1px solid #E1E1E1;  
border-radius: 5px; 
background: #FFF;
}
.col-item .photo img {  
margin: 0 auto; 
width: 100%;
}
.col-item .info {   
padding: 10px;  
border-radius: 0 0 5px 5px; 
margin-top: 1px;
}
.col-item:hover .info { 
background-color: #F5F5DC;
}
.col-item .price {      
float: left;    
margin-top: 5px;
}
.col-item .price h5 {   
line-height: 20px;  
margin: 0;
}
.price-text-color { 
color: #219FD1;
}
.col-item .info .rating {   
color: #777;
}
.col-item .rating {     
float: left;    
font-size: 17px;    
text-align: right;  
line-height: 52px;  
margin-bottom: 10px;    
height: 52px;
}
.col-item .separator {  
border-top: 1px solid #E1E1E1;
}
.clear-left {   
clear: left;
}
.col-item .separator p {    
line-height: 20px;  
margin-bottom: 0;   
margin-top: 10px;   
text-align: center;
}
.col-item .separator p i {  
margin-right: 5px;
}
.col-item .btn-add {    
width: 50%; 
float: left;
}
.col-item .btn-add {    
border-right: 1px solid #E1E1E1;
}
.col-item .btn-details {    
width: 50%; 
float: left;    
padding-left: 10px;
}
.controls { 
margin-top: 20px;
}
[data-slide="prev"] {
 margin-right: 10px;
}</style>
</head>
<body>
<div class="header">
        <nav id="nav">
        <ul>
            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
            <li><a href="{{ route('subindex') }}">Sản Phẩm</a></li>
            <li><a href="{{ route('collect') }}">Bộ Sưu Tập</a></li>
            <li><a href="{{ Route('contact') }}">Liên Hệ</a></li>
            <li><a href="{{ route('adminindex') }}" style="color: rgb(219, 85, 85); margin-left:500px">Trang Quản Lý</a></li>
            
            


        </ul>
         </nav>
        </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

              
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng Ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng Xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Về Chúng Tôi</h6>
              <p class="text-justify">INAX là thương hiệu thiết bị vệ sinh và gạch kiến trúc hàng đầu Nhật Bản.
                <br>INAX không ngừng tạo ra những phòng tắm đẹp và hiện đại,<br>khiến cuộc sống mỗi ngày trở nên tiện lợi, khỏe mạnh, thú vị và tốt đẹp hơn.
  
              </p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Tại sao nên chọn Inax Store?</h6>
              <ul class="footer-links">
                <li>- Đội Ngũ Chuyên Nghiệp</a></li>
                <li>- Phù hợp với mọi xu hướng</a></li>
                <li>- Có nhiều sản phẩm chọn lựa</a></li>
                <li>- Uy tín, Chất Lượng</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Cửa Hàng Thiết Bị Vệ Sinh Inax</h6>
              <ul class="footer-links">
                <li>- Đ/C : 96 định công,Thanh Xuân,HN</a></li>
                <li>- SĐT :0123456789</a></li>
                <li>- Email : inax@gmail.com</a></li>
                <li>- Web : InaxStore.com.vn</a></li>
              </ul>
            </div>  
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Design by Vu Thu Huyen
              </p>
            </div>
          </div>
        </div>
  </footer>

<script src="js/jquery-1.11.1.min.js"></script>
</html>
