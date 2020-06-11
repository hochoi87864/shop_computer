@extends('customer.layout.master')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here --> 
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6959699908034!2d105.75952895505496!3d21.044847640422272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c3ce577141%3A0xb1a1ac92701777bc!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUw6BpIG5ndXnDqm4gdsOgIE3DtGkgdHLGsOG7nW5nIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1591861769919!5m2!1svi!2s" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Liên lạc với chúng tôi</h3>
                    <p class="contact-page-message mb-25">Mọi thắc mắc và câu hỏi xin liên hệ với chúng tôi qua địa chỉ dưới đây</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Địa chỉ</h4>
                        <p>41A Đường Phú Diễn, Cầu Diễn, Bắc Từ Liêm, Hà Nội, Việt Nam</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Số điện thoại</h4>
                        <p>Mobile: 0942674663</p>
                        <p>Hotline: 1009 678 456</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>trungle87864@gmail.com</p>
                        <p>hochoi87864@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Main Page Area End Here -->
@endsection