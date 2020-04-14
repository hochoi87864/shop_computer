@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <form method="POST" id="formSaveInfo">
                    @csrf
                    <div class="checkbox-form">
                        <h3>Chi tiết hóa đơn</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input placeholder="Nhập họ và tên..." type="text" name="name" value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Street address" name="address" type="text">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="" name="email" type="email">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input name="phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú</label>
                                        <textarea id="checkout-mess" name="note" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Giỏ hàng của bạn: </h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th class="cart-product-total">Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr class="cart_item">
                                        <td class="cart-product-name"> {{$product->name}}<strong class="product-quantity"> × {{$product->qty}}</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{number_format($product->price*$product->qty,0,',','.')}} VN</span></td>  
                                    </tr>    
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Tổng tiền thanh toán</th>
                                    <td><span class="amount">{{\Cart::subtotal(0,',','.')}} VNĐ</span></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class="order-button-payment">
                                <input value="Thanh toán" type="submit" id="submitFormSaveInfo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
@endsection
@section('javascript')
    <script>
        $(function(){
            $("#submitFormSaveInfo").click(function(){
                $("#formSaveInfo").submit();
            });
        });
    </script>
@endsection