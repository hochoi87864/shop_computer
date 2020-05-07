@extends('customer.layout.master')
@section('content')
<style>
	.ellipsis {
	white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    }
	.block-ellipsis {
	display: -webkit-box;
	max-width: 100%;
	height: 40px;
	margin: 0 auto;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	overflow: hidden;
	text-overflow: ellipsis;
    }
    .block-ellipsis-description{
	display: -webkit-box;
	max-width: 100%;
	height: 50px;
	margin: 0 auto;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	overflow: hidden;
	text-overflow: ellipsis;
    margin-bottom: 6px;
    }
</style>
<!-- Begin Slider With Category Menu Area -->
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Category Menu Area -->
            <div class="col-lg-3">
                <!--Category Menu Start-->
                <div class="category-menu">
                    <div class="category-heading">
                        <h2 class="categories-toggle"><span>categories</span></h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        <?php
                            $numberListCategory = 1;
                        ?>
                        <ul>
                            @foreach($categories as $category)
                                @if($numberListCategory <=8 )
                                <li class=""><a href="{{route('category.index',[$category->c_name_slug,$category->id])}}">{{$category->c_name}}</a>  
                                    </li>
                                @endif
                                @if($numberListCategory >8 )
                                    <li class="rx-child"><a href="#">{{$category->c_name}}</a></li>
                                @endif
                                <?php $numberListCategory++ ?>
                            @endforeach 
                            <li class="rx-parent">
                                <a class="rx-default">More Categories</a>
                                <a class="rx-show">Less Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Category Menu End-->
            </div>
            <!-- Category Menu Area End Here -->
            <!-- Begin Slider Area -->
            <div class="col-lg-9">
                <div class="slider-area pt-sm-30 pt-xs-30">
                    <div class="slider-active owl-carousel">
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-02 bg-4">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                <h2>Chamcham Galaxy S9 | S9+</h2>
                                <h3>Starting at <span>$589.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-01 bg-5">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                <h2>Work Desk Surface Studio 2018</h2>
                                <h3>Starting at <span>$1599.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-02 bg-6">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                <h2>Phantom 4 Pro+ Obsidian</h2>
                                <h3>Starting at <span>$809.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
        </div>
    </div>
</div>
<!-- Slider With Category Menu Area End Here -->
<!-- Begin Li's Special Product Area -->
<section class="product-area li-laptop-product Special-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>SẢN PHẨM HOT</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="special-product-active owl-carousel">
                        @foreach($hotproducts as $hotproduct)              
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{route('product.index',[$hotproduct->pro_name_slug,$hotproduct->id])}}">
                                        @if(isset($hotproduct->pro_image))
                                            <img src="{{asset('upload/pro_image/'.$hotproduct->pro_image)}}" alt="Li's Product Image">
                                        @else
                                            <img src="{{asset('noimg.png')}}" alt="Li's Product Image">
                                        @endif
                                    </a>
                                    @if($hotproduct->pro_hot == 1)
                                        <span class="sticker">Hot</span>
                                    @endif
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">Số lượng: {{$hotproduct->pro_number}}</a>
                                            </h5>
                                            <div class="rating-box">
                                                <?php
                                                $point= 0;
                                                if($hotproduct->pro_number_of_reviewers>0){
                                                    $point_product_hot= round($hotproduct->pro_total_star/$hotproduct->pro_number_of_reviewers);
                                                }
                                                else {
                                                    $point_product_hot = -1;
                                                }
                                                ?>
                                                <ul class="rating">
                                                    @if($point_product_hot == -1)
                                                        <li style="color: #a4a4a4;
                                                        font-size: 13px;
                                                        text-transform: capitalize;
                                                        transition: all 0.3s ease-in-out;">Chưa đánh giá</li>
                                                    @else
                                                        @for($i=1; $i<=5; $i++)
                                                            <li class="{{$i<=$point_product_hot ? '':'no-star'}}"><i class="fa fa-star-o"></i></li>
                                                        @endfor
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{route('product.index',[$hotproduct->pro_name_slug,$hotproduct->id])}}">{{$hotproduct->pro_name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($hotproduct->pro_price,0,",",".")}} VNĐ</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a class="button_add_cart" href="{{route('shopping.add.product',$hotproduct->id)}}">Add to cart</a></li>
                                            <li><a class="links-details button_add_favorite_product" href="{{route('get.add.favorite.product',$hotproduct->id)}}"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="{{route('product.index',[$hotproduct->pro_name_slug,$hotproduct->id])}}" title="quick view" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Special Product Area End Here -->
<!-- Begin Li's Trending Product | Home V2 Area -->
<section class="product-area li-trending-product li-trending-product-2 pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>SẢN PHẨM BÁN CHẠY</span>
                    </h2>
                </div>           
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach($product_best_pays as $product_best_pay)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('product.index',[$product_best_pay->pro_name_slug,$product_best_pay->id])}}">
                                                    @if(isset($product_best_pay->pro_image))
                                                        <img src="{{asset('upload/pro_image/'.$product_best_pay->pro_image)}}" alt="Li's Product Image">
                                                    @else
                                                        <img src="{{asset('noimg.png')}}" alt="Li's Product Image">
                                                    @endif
                                                </a>
                                                @if($product_best_pay->pro_hot == 1)
                                                    <span class="sticker">Hot</span>
                                                @endif
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Số lượng: {{$product_best_pay->pro_number}}</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <?php
                                                            $point_product_best_pay= 0;
                                                            if($product_best_pay->pro_number_of_reviewers>0){
                                                                $point_product_best_pay= round($product_best_pay->pro_total_star/$product_best_pay->pro_number_of_reviewers);
                                                            }
                                                            else {
                                                                $point_product_best_pay = -1;
                                                            }
                                                            ?>
                                                            <ul class="rating">
                                                                @if($point_product_best_pay == -1)
                                                                    <li style="color: #a4a4a4;
                                                                    font-size: 13px;
                                                                    text-transform: capitalize;
                                                                    transition: all 0.3s ease-in-out;">Chưa đánh giá</li>
                                                                @else
                                                                    @for($i=1; $i<=5; $i++)
                                                                        <li class="{{$i<=$point_product_best_pay ? '':'no-star'}}"><i class="fa fa-star-o"></i></li>
                                                                    @endfor
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="{{route('product.index',[$product_best_pay->pro_name_slug,$product_best_pay->id])}}">{{$product_best_pay->pro_name}}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format($product_best_pay->pro_price,0,",",".")}} VNĐ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a class="button_add_cart" href="{{route('shopping.add.product',$product_best_pay->id)}}">Add to cart</a></li>
                                                        <li><a class="links-details button_add_favorite_product" href="{{route('get.add.favorite.product',$product_best_pay->id)}}"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{route('product.index',[$product_best_pay->pro_name_slug,$product_best_pay->id])}}" title="quick view" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>     
                                    <!-- single-product-wrap end -->
                                </div>
                                @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Trending Product | Home V2 Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-35">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Tin tức mới nhất</span>
                    </h2>
                </div>
                <div class="row li-main-content">
                    @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="{{route('get.article.detail',$article->id)}}"><img class="img-full" src="{{asset('upload/a_image/'.$article->a_image)}}" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h5 class="li-blog-heading pt-25"><a href="{{route('get.article.detail',$article->id)}}" class="block-ellipsis">{{$article->a_name}}</a></h5>
                                    <div class="li-blog-meta" style="padding: 0px 0 10px;">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> {{$article->created_at}}</a>
                                    </div>
                                    <p class="block-ellipsis-description">{{$article->a_description}}</p>
                                    <a class="read-more" href="{{route('get.article.detail',$article->id)}}">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->
<!-- Begin Li's Laptops Product | Home V2 Area -->
@foreach($categories as $category)
@if($category->Product->count()>=5)
<section class="product-area li-laptop-product li-laptop-product-2 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>{{$category->c_name}}</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach($category->Product->sortByDesc('id')->take(5) as $product)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-image">
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
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="shop-left-sidebar.html">Số lượng: {{$product->pro_number}}</a>
                                                </h5>
                                                <div class="rating-box">
                                                    <?php
                                                    $point= 0;
                                                    if($product->pro_number_of_reviewers>0){
                                                        $point= round($product->pro_total_star/$product->pro_number_of_reviewers);
                                                    }
                                                    else {
                                                        $point = -1;
                                                    }
                                                    ?>
                                                    <ul class="rating">
                                                        @if($point == -1)
                                                            <li style="color: #a4a4a4;
                                                            font-size: 13px;
                                                            text-transform: capitalize;
                                                            transition: all 0.3s ease-in-out;">Chưa đánh giá</li>
                                                        @else
                                                            @for($i=1; $i<=5; $i++)
                                                                <li class="{{$i<=$point ? '':'no-star'}}"><i class="fa fa-star-o"></i></li>
                                                            @endfor
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="{{route('product.index',[$product->pro_name_slug,$product->id])}}">{{$product->pro_name}}</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($product->pro_price,0,",",".")}} VNĐ</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <li class="add-cart active"><a class="button_add_cart" href="{{route('shopping.add.product',$product->id)}}">Add to cart</a></li>
                                                <li><a class="links-details button_add_favorite_product" href="{{route('get.add.favorite.product',$product->id)}}"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="{{route('product.index',[$product->pro_name_slug,$product->id])}}" title="quick view" class="quick-view-btn"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>     
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach  
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
@endif
@endforeach
<!-- Li's Laptops Product | Home V2 Area End Here -->

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