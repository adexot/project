<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
</head>

<body>
	<nav class="bg-gray client-nav">
		<div class="brand container">
			<a href="{{url('/front')}}">SUPPORT SYSTEM</a>
		</div>
	</nav>
	<section class="search-box bg-blue">
		<div class="container">
			<form action="" method="" class="search-form bg-white">
				<input type="text" name="" id="" class="search-input" placeholder="Have a problem? Use the express search system">
				<button type="submit" class="search-button">Search</button>
			</form>
		</div>
	</section>

    @yield('content')

	<footer class="text-center  ">
		<a href="{{url('/admin')}}">Goto Admin portal</a>
		<h6>Support System.</h6>
	</footer>
</body>

</html>