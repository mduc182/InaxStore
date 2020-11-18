@extends('layouts.billlayout')

@section('content')

<div class="container">
<form action="{!! Route('updatebill',$bills->id) !!}" method="post">
            {{ csrf_field() }}
            <div class="row">

                <div class="panel panel-footer" >
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Tên Sản Phẩm</th>
                             <th>Nhà Cung Cấp</th>
                             <th>Số Lượng</th>
                             <th>Đơn Giá</th>
                             <th>Thành Tiền</th>
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         <td>
         <select class="form-control" id="product_id" name="product_id">
                @foreach ( $products as $product)
                <option value="{{ $product->id }}">{{ $product->productname }}</option>  
                @endforeach
                </select></td>
         <td> <select class="form-control" id="provider_id" name="provider_id" >
                @foreach ( $providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->providername }}</option>  
                @endforeach
                </select></td>   
           <td><input type="text" value="{{  $bills->quantity  }}" class="form-control quantity" required=""></td>
           <td><input type="text" value="{{  $bills->budget  }}" class="form-control budget"></td>
           <td><input type="text" value="{{  $bills->amount  }}" class="form-control amount"></td>
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td style="border: none"></td>
                             <td>Tổng Tiền</td>
                             <td><b class="total" name="total"></b> </td>
                             <td><input type="submit" name="" value="Thêm Mới" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
                
            </div>
        </form>
    </div>
    <script type="text/javascript">
    $('tbody').delegate('.quantity,.budget','keyup',function(){
        var tr=$(this).parent().parent();
        var quantity=tr.find('.quantity').val();
        var budget=tr.find('.budget').val();
        var amount=(quantity*budget);
        tr.find('.amount').val(amount);
        total();
    });
    function total(){
        var total=0;
        $('.amount').each(function(i,e){
            var amount=$(this).val()-0;
        total +=amount;
    });
    $('.total').html(total+".000 VNĐ");   
    }
    $('.addRow').on('click',function(){
        addRow();
    });
    </script>

</div>


@endsection