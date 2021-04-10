<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title>Todo en 1</title>

	<link rel="stylesheet" href="{{mix('css/main.css')}}">

	<link rel="icon" type="image/ico" href="./globo.ico">

	<script src="{{ mix('/js/app.js') }}" defer></script>
	@laravelPWA
</head>

<style>
	/* width */
	::-webkit-scrollbar {
		width: 16px;
		height: 16px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		/* border-radius: 100vh; */
		background: #111827;
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #8B5CF6;
		border-radius: 100vh;
		border: 3px solid #111827;
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #8B5CF6;
	}
</style>

{{-- <body class="bg-auto font-mono" style="background-image: url(./fondo.svg);"> --}}

<body class="bg-gray-100 scrollbar-thumb:bg-red-500 scrollbar-track:rounded">
	@inertia
	<div id="app">
		@yield('app')
	</div>
</body>
<footer>
	<div id="footer" class="z-10" style="position: fixed; bottom: -100px; width: 100%; text-align: center;">
		<iframe autoplay="true" id="myIFrame" style="width:100%; height:100px;" scrolling="no" frameborder="no">
		</iframe>
	</div>
</footer>

</html>