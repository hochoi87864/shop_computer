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
                    @if($order->Product->pro_image)
                        <td><img style="width:80px;height:60px" src="{{asset('upload/pro_image/'.$order->Product->pro_image)}}"/></td>     
                    @else
                        <td><img style="width:80px;height:60px" src="{{asset('noimg.png')}}"/></td>
                    @endif
                    
                    @if($order->or_sale>0)
                        <td>{{number_format($order->or_price*((100-$order->or_sale)/100),0,',','.')}} VNĐ</td>
                    @else
                        <td>{{number_format($order->or_price,0,',','.')}} VNĐ</td>
                    @endif
                    <td>{{$order->or_qty}}</td>
                    @if($order->or_sale>0)
                        <td>{{number_format(($order->or_price*((100-$order->or_sale)/100))*$order->or_qty,0,',','.')}} VNĐ</td>
                    @else
                        <td>{{number_format($order->or_price * $order->or_qty,0,',','.')}} VNĐ</td>
                    @endif   
                </tr>     
            @endforeach              
            </tbody>
        </table>
@endif