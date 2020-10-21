<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!-- Styles -->
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
    margin-left: 20px;
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
                <li><a href="login.html" style="color: rgb(219, 85, 85);">Trang Quản Lý</a></li>
            @if (Route::has('login'))
            <li>
                    @auth
                        <a href="{{ url('/home') }}">Home</a></li>
                    @else
                       <li> <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                        <li>   <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
            


        </ul>
         </nav>
        </div>
        </div>
    </body>
</html>
