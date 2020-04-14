@if($orders)
<?php $i=1?>
 <table class="table table-hover">
            <thead class="thead-dark">
                    <th scope="col">STT</th>
                    <th scope="col" style="">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
            </thead>
            <tbody>
            @foreach($orders as $key=>$order)
                <tr>
                    <th scope="col">#{{$i++}}</th>
                    <td>{{$order->Product->pro_name}}</td>
                    <td><img style="width:80px;height:60px" src="{{asset('upload/pro_image/'.$order->Product->pro_image)}}"/></td>
                    <td>{{number_format($order->or_price,0,',','.')}}</td>
                    <td>{{$order->or_qty}}</td>
                    <td>{{number_format($order->or_price * $order->or_qty,0,',','.')}}</td>
                </tr>     
            @endforeach              
            </tbody>
        </table>
@endif