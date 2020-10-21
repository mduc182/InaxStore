@extends('layouts.app')

@section('content')
<div class="container">
<form action="{!! Route('storetype') !!}" method="post">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Loại Sản Phẩm Cần Thêm</label>
                <input type="text" name="typename" class="form-control">
                <br>
                <br>
                <br>
                <input class="btn btn-success" value="Thêm Mới" type="submit" name="btn-add">
            </div>
        </form>
    </div>

</div>
@endsection