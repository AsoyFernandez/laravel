<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LaravelApp</title>
	
	{{-- menampilkan bootstrap --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!--[if 1t IE 9]>
	<script src="{{ asset('http:laravelapp.dev/js/html5shiv.min.js')}}"></script>
	<script src="{{ asset('http:laravelapp.dev/js/respond.min.js')}}"></script>
	<![endif]-->
</head>
<body>
<div class="container">
@include('navbar')
@yield('main')
</div>

@yield('footer')
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>