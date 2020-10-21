@extends('layouts.app')

@section('content')
<div class="container">
        <h3><p>Sửa Thông Tin Nhà Cung Cấp</p></h3>
        @if(isset($mess))
            <p class="alert alert-success">{!! $mess !!}</p>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{!! $error !!}</p>
            @endforeach
        @endif
        
        <form action="{!! Route('updateprovider', $providers->id) !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Nhà Cung Cấp</label>
                <input type="text" name="providername" value="{!! $providers->providername !!}" class="form-control">
                <br>
                <br>
                <br>
                <input class="btn btn-success" value="Sửa" type="submit" name="btn-edit">
            </div>
        </form>

    </div>


@endsection