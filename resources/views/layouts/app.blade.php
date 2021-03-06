<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<title>Posty</title>
</head>

<body class="bg-pink-50">
	<nav class="p-6 mb-2 bg-pink-900 text-white flex justify-between">
		<ul class="flex items-center">
			<li>
				<a href="" class="p-3">Home</a>
			</li>
			<li>
				<a href="" class="p-3">Dashboard</a>
			</li>
			<li>
				<a href="" class="p-3">Post</a>
			</li>
		</ul>

		<ul class="flex items-center">
			@auth
			<li>
				<a href="" class="p-3">Cooper</a>
			</li>
			<li>
				<a href="" class="p-3">Logout</a>
			</li>
			@endauth
			@guest
			<li>
				<a href="{{ route('login') }}" class="p-3">Login</a>
			</li>
			<li>
				<a href="{{ route('register') }}" class="p-3">Register</a>
			</li>
			@endguest

		</ul>
	</nav>
	@yield('content')
</body>

</html>