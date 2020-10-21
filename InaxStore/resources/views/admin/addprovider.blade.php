@extends('layouts.app')

@section('content')
<div class="container">
<form action="{!! Route('storeprovider') !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Nhà Cung Cấp Cần Thêm</label>
                <input type="text" name="providername" class="form-control">
                <br>
                <br>
                <br>
                <input class="btn btn-success" value="Thêm Mới" type="submit" name="btn-add">
            </div>
        </form>
    </div>

</div>
@endsection