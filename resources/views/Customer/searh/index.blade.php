@extends('customer.layout.master')
@section('content')
    <center><h3 class="mt-10">Danh sách tìm kiếm</h3></center>
<div class="col-sm-10 mx-auto">
<!-- shop-products-wrapper start -->
<div class="shop-products-wrapper">
    <div class="tab-content">
        
        <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
            <div class="row">
                <div class="col">
                    @foreach($products as $product)
                        <div class="row product-layout-list">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="product-image mb-3">
                                    <a href="{{route('product.index',[$product->pro_name_slug,$product->id])}}">
                                        @if(isset($product->pro_image))
                                        <img src="{{asset('upload/pro_image/'.$product->pro_image)}}" alt="Li's Product Image">
                                        @else
                                            <img src="{{asset('noimg.png')}}" alt="Li's Product Image">
                                        @endif
                                    </a>
                                    @if($product->pro_hot == 1)
                                    <span class="sticker">Hot</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7">
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="#">Số lượng: {{$product->pro_number}}</a>
                                            </h5>
                                            <div class="rating-box">
                                                <?php
                                                    $point_product_searh= 0;
                                                    if($product->pro_number_of_reviewers>0){
                                                        $point_product_searh= round($product->pro_total_star/$product->pro_number_of_reviewers);
                                                    }
                                                    else {
                                                        $point_product_searh = -1;
                                                    }
                                                ?>
                                                <ul class="rating">
                                                    @if($point_product_searh == -1)
                                                        <li style="color: #a4a4a4;
                                                        font-size: 13px;
                                                        text-transform: capitalize;
                                                        transition: all 0.3s ease-in-out;">Chưa đánh giá</li>
                                                    @else
                                                        @for($i=1; $i<=5; $i++)
                                                            <li class="{{$i<=$point_product_searh ? '':'no-star'}}"><i class="fa fa-star-o"></i></li>
                                                        @endfor
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{route('product.index',[$product->pro_name_slug,$product->id])}}">{{$product->pro_name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($product->pro_price,0,",",".")}} VNĐ</span>
                                        </div>
                                        <p>{{$product->pro_description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="shop-add-action mb-xs-30">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a class="button_add_cart" href="{{route('shopping.add.product',$product->id)}}">Add to cart</a></li>
                                        <li class="wishlist"><a class="button_add_favorite_product" href="{{route('get.add.favorite.product',$product->id)}}"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                        <li><a class="quick-view"  href="{{route('product.index',[$product->pro_name_slug,$product->id])}}"><i class="fa fa-eye"></i>Quick view</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop-products-wrapper end -->
</div>
@endsection
@section('javascript')
<script>
    $(function(){
        $(".button_add_favorite_product").click(function(event)
        {
            event.preventDefault();
            url = $(this).attr("href");
            $.ajax(
                {
                    method : "GET",
                    url : url
                }
            ).done(function(result)
            {
                if(result.status == 1)
                {
                    alert("Thêm thành công !!!");
                    $(".wishlist-item-count").text(result.number_favorite_product);
                }
                if(result.status == 0)
                {
                    alert("Đã tồn tại !!!");
                }
                if(result.error == 1)
                {
                    alert("Cần đăng nhập cho chức năng này");
                }
            });
        });
        $(".button_add_cart").click(function(event)
        {
            event.preventDefault();
            url = $(this).attr("href");
            $.ajax(
                {
                    method : "GET",
                    url : url
                }
            ).done(function(result)
            {
                if(result.status == 1)
                {
                    alert("Thêm sản phẩm thành công !!!");
                    $(".cart-item-count").text(result.number_product_in_cart);
                    $(".price_total_cart").text(result.price_total_cart);
                }
                if(result.status == 2)
                {
                    alert("Trong kho chỉ còn "+result.product_less+" sản phẩm" );
                }
                if(result.status == 3)
                {
                    alert("Sản phẩm không tồn tại !!!");
                }
                if(result.status == 4)
                {
                    alert("Hết hàng");
                }
            });
        }); 
    });
</script>
@endsection