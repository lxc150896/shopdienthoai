<!DOCTYPE html>
<html>
<head>
    <base href="{{ asset('bower_components/frontend') }}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('frontend.shop') }} - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="cssfrontend/frontend.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
    <!-- header -->
    <div id="header" class="row menu-area headroom header--fixed">
        <div class="container">
            <div id="logo" class="col-xs-6 col-sm-6 col-md-3 text-center">
                <h1>
                    <a href="{{ asset('/') }}"><img src="img/home/homelogo.png"></a>
                </h1>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-9">
                <div id="search-bar" class="col-md-6 col-md-offset-1">
                    {!! Form::open(array('action' => array('FrontendController@getSearch'), 'method' => 'GET', 'class' => 'navbar-form', 'role' => 'search')) !!}
                        <div class="input-group">
                            <div class="input-group-btn">
                                {!! Form::text('result', null, ['class' => 'form-control', 'placeholder' => 'Search']) !!}
                            </div>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div id="cart" class="col-md-3 col-md-offset-2 text-center">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="display" href="{{ asset('cart/show') }}">{{ trans('frontend.cart') }}</a>
                    <a href="{{ asset('cart/show') }}">{{ Cart::getTotalQuantity() }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- wrap -->
    <div id="wrap" class="container">
        <div class="row">
            <div id="menu" class="col-md-3">
                <div class="navbar-collapse" id="myNavbar">
                    <ul class="nav">
                        <li>{{ trans('frontend.listCategory') }}</li>
                        @foreach($categories as $item_category)
                        <li><a href="{{ asset('category/' . $item_category->id . '/' . $item_category->slug . '.html') }}">{{ $item_category->name }}</a></li>
                        @endforeach()
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">{{ trans('frontend.seeMore') }}</button>
                    <div class="dropdown-content">
                        @foreach($category as  $item)
                        <a href="{{ asset('category/' . $item->id . '/' . $item->slug . '.html') }}">{{ $item->name }}</a>
                        @endforeach()
                    </div>
                </div>
            </div>
            <div id="slide" class="col-md-9">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/home/slide.jpg" alt="Chania">
                        </div>
                        <div class="item">
                            <img src="img/home/slide2.jpg" alt="Chania">
                        </div>
                        <div class="item">
                            <img src="img/home/slide3.jpg" alt="Flower">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="v-banner" class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-0 text-center">
                <img src="img/home/v-banner1.jpg">
                <img src="img/home/v-banner2.jpg">
                <img src="img/home/v-banner3.jpg">
                <img src="img/home/v-banner4.jpg">
                <img src="img/home/v-banner5.jpg">
                <img src="img/home/v-banner6.jpg">
                <img src="img/home/v-banner7.jpg">
            </div>
            <!-- wrap -->
            @yield('main')
            </div>
    </div>
    <!-- end wrap -->
    <!-- footer -->
    <div id="footer" class="row">
        <div id="bot-footer">
            <div class="">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <p>
                        <marquee behavior="right"><span>{{ trans('frontend.cap') }}</span></marquee>
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="top-footer">
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div id="footer-logo" class="col-xs-8 col-sm-12 col-md-6 text-center">
                        <h1>
                            <a href="#"><img class="logo_bot" src="img/home/logo-zmobile.jpg"></a>
                        </h1>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h3>{{ trans('frontend.about') }}</h3>
                        <p class="text-justify">{{ trans('frontend.introduce') }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h3>{{ trans('frontend.hotLine') }}</h3>
                        <p>{{ trans('frontend.phone') }}</p>
                        <p>{{ trans('frontend.email') }}</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h3>{{ trans('frontend.contact') }}</h3>
                        <p>{{ trans('frontend.address1') }}</p>
                        <p>{{ trans('frontend.address2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left" title="Trở lên đầu trang">
        <span class="glyphicon glyphicon-circle-arrow-up text-primary"></span>
    </div>
    <!-- end footer -->
</body>
</html>
<script type="text/javascript" src="../headroom/headroom.min.js"></script>
<script type="text/javascript" src="cssfrontend/fronend.js"></script>
