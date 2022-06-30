@extends('app')
@section('content')
@auth



<!doctype html>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Profil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
 	    <!-- CSRF Token -->
 	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
 	<link rel="stylesheet" href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
 	<link rel="stylesheet" href="{{ url('assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
 	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
 	<link rel="stylesheet" href="{{ url('assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png')}}">
</head>

<body>
	<br><br><br><br><br><br><br>
	
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-no-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
				
					
					<div class="left"> 
						<img src="assets/img/profil.png">
								
						Welcome ! <b>{{ Auth::user()->name }}</b>

					
						
						
						
						<div class="content">

							<div class="header">
								
								<form class="form-auth-small" action="index.php">
									
								
								
								
							
								
							</div>
						</div>
					</div>
			
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Saya Ana Hanapi</h1>
							<p>Saat ini sedang menempuh jenjang pendidikan S1 di Universitas Bhayangkara Raya , dengan berkembang nya teknologi sangat berdampak baik dari sisi ekonomi , politik , budaya . </p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>

@endauth
@guest
<br><br><br><br><br><br><br><br><br><br><br><br>
<html>



	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
			 <!-- CSRF Token -->
		 <meta name="csrf-token" content="{{ csrf_token() }}">
		
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		 <link rel="stylesheet" href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
		 <link rel="stylesheet" href="{{ url('assets/vendor/linearicons/style.css')}}">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
		 <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		 <link rel="stylesheet" href="{{ url('assets/css/demo.css')}}">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png')}}">
		
	</head>
	<body>

	<div class="header">
		<div class="logo text-left"><img src="assets/img/logo.png" alt="Klorofil Logo">
		</div>
		<p class="lead"></p>
	</div>
	<form class="form-auth-small" action="index.php">
		<div class="right">
			<div class="overlay"></div>
			<div class="content text">
				<h1 class="heading">Universitas Bhayangkara Jakarta Raya</h1>
				<p>Ana Hanapi 201910225288</p>
				<p></p>
			</div>
		</div>
		<div class="clearfix"></div>
	</body>
</html>
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest
@endsection


