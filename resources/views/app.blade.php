<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title>Todo en uno | All in one</title>

	<link rel="stylesheet" href="{{mix('css/main.css')}}">

	<link rel="icon" type="image/ico" href="./globo.ico">

	<script src="{{ mix('/js/app.js') }}" defer></script>

</head>

<body class="bg-gray-100">
	@inertia
</body>
<footer>
	<div id="footer" class="z-10" style="position: fixed; bottom: 0px; width: 100%; text-align: center;">
		<iframe autoplay="true" id="myIFrame" src="" style="width:100%; height:100px;" scrolling="no" frameborder="no">
		</iframe>
	</div>
</footer>

</html>