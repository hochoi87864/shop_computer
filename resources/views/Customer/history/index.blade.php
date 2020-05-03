@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">History</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
{{-- History user --}}
<h4><center class="mt-20">NHẬT KÝ MUA HÀNG</center></h4>
<div class="col-sm-10 mx-auto">
<table class="table table-hover table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th style="width: 20%">Địa chỉ giao hàng</th>
        <th>Số điện thoại</th>
        <th style="width: 20%">Ghi chú</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Ngày mua</th>
        <th>Xử lý</th>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{$transaction->id}}</td>
                <td>{{$transaction->tr_address}}</td>
                <td>{{$transaction->tr_phone}}</td>
                <td>{{$transaction->tr_note}}</td>
                <td>{{number_format($transaction->tr_total,0,',','.')}} VNĐ</td>
                <td>{{$transaction->tr_status}}</td>
                <td>{{$transaction->created_at}}</td>
                
                <td><a href="{{route('history.get.order.item',$transaction->id)}}" class="js_order_item" data-id="{{$transaction->id}}" data-toggle="modal" data-target="#showOrderItem">Xem</a></td>
                {{-- custom modal by me --}}
                <div class="modal fade" id="showOrderItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng #<span class="modal_id_transacrion"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        Chưa có dữ liệu hoặc bị lỗi !!!
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                {{-- end custom modal by me --}}
            </tr>
        @endforeach
    </tbody>
</table>
</div>

{{-- End History user --}}
@endsection
@section('javascript')
<script>
    $(function()
    {
      $(".js_order_item").click(function(event)
      {
        event.preventDefault();
        var id = $(this).attr('data-id');
        var url = $(this).attr('href');
        $.ajax({
          method : "GET",
          url : url
        }).done(function(result)
        {
          if(result)
          {
            $(".modal_id_transacrion").text(id);
            $(".modal-body").html('').append(result);
          }
        });
      });
    });
</script>
@endsection