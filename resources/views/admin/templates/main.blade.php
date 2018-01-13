</html><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Panel de administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
	@if(Auth::user())
	@include('admin.templates.partials.nav')
	@endif
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">@yield('title')</div>
					<div class="panel-body">
						@include('admin.includes.errors')
						@yield('content')
					</div>
				</div>

				<footer>
					<p>NotiTech <br> &copy Yordanvelasquez.me</p>
				</footer>
			</div>
		</div>
	</div>
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>