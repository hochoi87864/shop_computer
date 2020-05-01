@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Wishlist Area Strat-->
<div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <h4><center>DANH SÁCH SẢN PHẨM YÊU THÍCH CỦA BẠN </center></h4>
        <div class="row" style="margin-top: 3%">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Image</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="li-product-stock-status">Số lượng</th>
                                    <th class="li-product-add-cart">Thêm vào giỏ hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class="li-product-remove"><a href="{{route('get.delete.favorite.product',$product->id)}}"><i class="fa fa-times"></i></a></td>
                                        <td class="li-product-thumbnail"><a href="#"><img width="200px" src="{{asset('upload/pro_image/'.$product->pro_image)}}" alt=""></a></td>
                                        <td class="li-product-name"><a href="#">{{$product->pro_name}}</a></td>
                                        <td class="li-product-price"><span class="amount">{{number_format($product->pro_price,2,',','.')}} VNĐ</span></td>
                                        <td class="li-product-stock-status"><span class="in-stock">{{$product->pro_number}}</span></td>
                                        <td class="li-product-add-cart"><a href="{{route('shopping.add.product',$product->id)}}">add to cart</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Wishlist Area End-->
@endsection