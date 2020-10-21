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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            #nav {
    position: relative;
    background-color: #ddd9d9;
    height: 50px;
    width: 1280px;
    margin-left: 40px;
}
#nav li
    {
        
        list-style-type: none ;
        display: inline-block;
 
           height: 30px;
    }

#nav a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    display: block;
    margin-left: 50px;
    margin-top: 10px;
    font-size: 18px;
}
#nav a:hover
{
    color:rgb(238, 109, 23);
}
#nav img{
    
    width: 20px;
    height: 20px;
}


        </style>
</head>
<body>
<div class="header">
        <nav id="nav">
        <ul>
            <li><a href="tintuc.html">Trang Chủ</a></li>
            <li><a href="gioithieu.html">Sản Phẩm</a></li>
            <li><a href="lienhe.html">Loại Sản Phẩm</a></li>
            <li><a href="#" onclick=myFunction() style="color: rgb(219, 85, 85); margin-left:600px">Trang Quản Lý</a></li>
            <script>
                function myFunction()
                {
                    alert('Bạn Cần Đăng Nhập Để Truy Cập Trang Quản Lý');
                }
            </script>
            


        </ul>
         </nav>
        </div>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
