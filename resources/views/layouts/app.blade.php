<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sat Sai Infocom</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
	@include('inc.navbar')
		@if(Request::is('/'))
		@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
		<footer id="footer" class="text-center">
			<p>Copyright 2019 &copy; SAT SAI INFOCOM</p>
		</footer>
	</div>
	

	

</body>
</html>