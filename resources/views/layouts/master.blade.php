<?php
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
    <title>
        @yield('title')
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="CurrencyExchange">
    <meta property="og:url" content="">
    <meta property="og:type" content="business" />
    <meta property="og:image" content="{{ 'assets/images/slide_img.png' }}">
    <meta property="og:description" content="For fun">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:image:alt" content="CurrencyExchange" />
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="#"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}"/>
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/pogo-slider.min.css')}}"/>
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="{{asset('/assets/images/loader.gif')}}" alt="#"/>
    </div>
</div>
<!-- end loader -->
@extends('layouts.header')

@yield('content')
<!-- END LOADER -->
@extends('layouts.footer')

</body>
</html>
