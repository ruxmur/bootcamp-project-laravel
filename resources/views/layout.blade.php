<!DOCTYPE html>@extends('layout')

@section('content')
<div class="card">
    <div class="row">
        <div class="col cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-end text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 44.00 </div>
                    <div class="col close text-center">&#10005;</div>
                </div>
            </div>
            <div class="row">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 25.00 </div>
                    <div class="col text-center close">&#10005;</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="d-flex item__content align-items-center">
                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>
                    <div class="col text-center">
                        <div class="row text-muted">Tour</div>
                        <div class="row">Explore Orhei reserve</div>
                    </div>
                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>
                    <div class="col text-center">&euro; 60.00 </div>
                    <div class="col text-center close">&#10005;</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="d-column justify-content-center cart__summary">
            <div>
                <h5 class="cart__summary_title"><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col text-center" >ITEMS 3</div>
                <div class="col text-center">&euro; 132.00</div>
            </div>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col text-center">TOTAL PRICE</div>
                <div class="col text-center">&euro; 137.00</div>
            </div>
            <button class="summary__btn">ORDER</button>
        </div>
    </div>
    <div class="back-to-shop"><a href="{{ route('tourism') }}">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
</div>
@endsection
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="POWER: a html template for Gym lessons application">
	<meta name="keyword" content="HTML, CSS, BOOTSTRAP">
	<!-- OPTIMIZIED VIEWPORT FOR MOBILE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale =1.0">
	<title>POWER</title>
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Podkova:wght@900&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="/storage/general-usage/POWER.png" sizes="32X32">
	<!-- GLOBAL CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/header-footer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<!-- ADD YOUR CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/blog/css/blog.css')}}"> --}}

</head>

<body>
	<div class="container-fluid topnav hide">
		<div class="col-9 col-sm-9 col-md-9 col-lg-9">
			@include('header')
		</div>
		<main>
			<div class="row wrapper">
				<div class="container-fluid">
					@include('header')
					<div class="row">
						<div class="col-12">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	@include('footer')
</body>

</html>



{{-- kak po primeru
<div class="container-fluid">
@include('header')
<div class="row">
<div class="col-9">
<div class="content-body">
@yield('content')
</div>
</div>
<div class="col-3">
<div class="content-body">
@include('blog.popular-articles')
tut bil >template on v popular-articles.blade.php
</div>
</div>
</div>
</div> --}}
