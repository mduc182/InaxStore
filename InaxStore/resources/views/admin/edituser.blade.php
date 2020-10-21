@extends('layouts.app')

@section('content')
<div class="container">
        <h3><p>Sửa Thông Tin Nhân Viên</p></h3>
        @if(isset($mess))
            <p class="alert alert-success">{!! $mess !!}</p>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{!! $error !!}</p>
            @endforeach
        @endif
        
        <form action="{!! Route('updateuser', $users->id) !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Nhân Viên</label>
                <input type="text" name="name" value="{!! $users->name !!}" class="form-control">
                <br>
                <label>Địa Chỉ</label>
                <input type="text" name="address" value="{!! $users->address !!}" class="form-control">
                <br>
                <label>SĐT</label>
                <input type="text" name="phone" value="{!! $users->phone !!}" class="form-control">
                <br>
                <label>Ngày Sinh</label>
                <input type="text" name="birth" value="{!! $users->birth !!}" class="form-control">
                <br>
                <label>Chức Vụ</label>
                <input type="text" name="role" value="{!! $users->role !!}" class="form-control">
                <br>
                <input class="btn btn-success" value="Sửa" type="submit" name="btn-edit">
            </div>
        </form>

    </div>


@endsection