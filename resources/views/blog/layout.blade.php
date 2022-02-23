<!DOCTYPE html>
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
	<link rel="icon" type="image/png" href="../images/POWER.png" sizes="32X32">
	<!-- GLOBAL CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/header-footer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<!-- ADD YOUR CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/blog/css/blog.css')}}">
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
						<div class="col-9">
							<div class="content-body">
								@yield('content')
							</div>
						</div>
						<div class="col-3">
							<div class="content-body">
								@include('blog.popular-articles')
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	@include('footer')
</body>

</html>