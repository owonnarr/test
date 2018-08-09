@extends('layouts.frontend-layouts')
@section('content')

<div class="header-area">
    <div class="container">
        <div class="row">
            @include('frontend.partials.top-menu')
        </div>
    </div>
</div>

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('frontend.partials.logo')
            </div>
            <div class="col-sm-6">
            <div class="shopping-item">
            <a href="cart.htm">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                @include('frontend.partials.main-menu')
            </div>
        </div>
    </div>
</div>

<div class="slider-area">
    @include('frontend.partials.slider')
</div>

<div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @include('frontend.partials.boxes')
            </div>
        </div>
</div>

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('frontend.partials.latest-product')
            </div>
        </div>
    </div>
</div>

<div class="brands-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('frontend.partials.brands')
                </div>
            </div>
        </div>
</div>

<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @include('frontend.partials.top-sellers')
                </div>

                <div class="col-md-4">
                    @include('frontend.partials.recently-product')
                </div>
                <div class="col-md-4">
                    @include('frontend.partials.new-product')
                </div>
            </div>
        </div>
</div>

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    @include('frontend.partials.footer-abouts')
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                @include('frontend.partials.footer-user-menu')
            </div>
            <div class="col-md-3 col-sm-6">
                @include('frontend.partials.footer-menu')
            </div>
            <div class="col-md-3 col-sm-6">
                    @include('frontend.partials.footer-newslatter')
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="https://freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="footer-card-icon">
                <i class="fa fa-cc-discover"></i>
                <i class="fa fa-cc-mastercard"></i>
                <i class="fa fa-cc-paypal"></i>
                <i class="fa fa-cc-visa"></i>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection