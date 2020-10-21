@extends('layouts.app')

@section('content')
<div style="background-color:#e5e5e5;">
            <div class="container pt-2 pb-2">
                <p class="d-inline mr-1"><b>Trang chủ</b></p>
                <p class="d-inline"> > </p>
                <p class="d-inline ml-1" style="color:#8e8e8e;">Liên hệ</p>
            </div>
        </div>

        <div class="container">
    
    <div class="row">


        
        <div class="col-md-6">
                
        <br>
        <br>
            <h2 class="mgt-30 txt-blue"   ><b>Liên hệ với chúng tôi</b></h2>

            <p><b>Họ và Tên</b></p>
            <input type="text" class="width100 form-control" name="">

            <p class="mgt-15"><b>Email</b></p>
            <input type="text" class="width100 form-control" name="">

            <p class="mgt-15"><b>Tin nhắn</b></p>
            <textarea rows="3" class="width100 form-control" style="border-color:#e2e2e2"></textarea>
            <br>
            <button class="mgt-15 btn-send btn btn-primary" onclick="myFunction()">Gủi</button>
            <script>
              function myFunction() {
                alert("Thông tin của bạn đã được gửi đi thành công!");
              }
              </script>
        </div>

        <div class="col-md-6">
            <img class="mgt-30" style="padding-top:50px;" src="img/map.png">
        </div>
    </div>
    <!-- end row -->
</div>
<br>
<br>
<!-- end container -->

<div class="container mgt-30">
    <div class="row">
        <div class="col-md-4">
            <img class="" src="img/location_line.png">
            <p class="display-ib p-info"><b>Địa chỉ <br> 96 Định Công </b></p>
        </div>
        <div class="col-md-4">
            <img class="email-logo" src="img/mail_line.png">
            <p class="display-ib p-info"><b>Email <br> inax@gmail.com </b></p>
        </div>
        <div class="col-md-4">
            <img class="phone-logo" src="img/phone_line.png">
            <p class="display-ib p-info"><b>Điện thoại <br>0123456789 </b></p>
        </div>
    </div>
</div>
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
        <br>
        <br>
        <br>
        <br>
  </footer>
@endsection