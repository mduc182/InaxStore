@extends('layouts.app')

@section('content')
<div class="container">
<form action="{!! Route('storeproduct') !!}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-6">
                <label>Tên Sản Phẩm</label>
                <input type="text" name="productname" class="form-control">
                <br>
                <label>Mô Tả Sản Phẩm</label>
                <input type="text" name="detail" class="form-control">
                <br>
                <label>Giá Bán</label>
                <input type="text" name="price" class="form-control">
                <br>
                <label>Số Lượng</label>
                <input type="text" name="amount" class="form-control">
                <br>
                <label>Loại Sản Phẩm</label>
                <select class="form-control" id="type_id" name="type_id">
                @foreach ( $types as $type)
                <option value="{{ $type->id }}">{{ $type->typename }}</option>  
                @endforeach
                </select>
                <br>
                <label for="Product Name">Thêm Ảnh</label>
                <br>
                <input type="file" class="form-control" name="image" multiple="true">
                <br><br>
                <input class="btn btn-success" value="Thêm Mới" type="submit" name="btn-add">
            </div>
        </form>
    </div>

</div>
@endsection