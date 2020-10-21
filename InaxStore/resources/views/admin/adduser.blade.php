@extends('layouts.app')

@section('content')
<div class="container">
<form action="{!! Route('storeuser') !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Nhân Viên</label>
                <input type="text" name="name" class="form-control">
                <br>
                <label>Email Đăng Nhập</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <br>
                <label>Mật Khẩu Đăng Nhập</label>
                <input type="password" name="password" class="form-control">
                <br>
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control">
                <br>
                <label>Điện Thoại</label>
                <input type="text" name="phone" class="form-control">
                <br>
                <label>Ngày Sinh</label>
                <input type="text" name="birth" class="form-control">
                <br>
                <label>Chức Vụ</label>
                <input type="text" name="role" class="form-control">
                <br>
                <input class="btn btn-success" value="Thêm Mới" type="submit" name="btn-add">
            </div>
        </form>
    </div>

</div>
@endsection