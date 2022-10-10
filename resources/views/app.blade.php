<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Todo en 1</title>

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">

    <link rel="icon" type="image/ico" href="./globo.ico">

    <script src="{{ mix('/js/app.js') }}" defer></script>
    @laravelPWA
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
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

{{--

<body class="bg-auto font-mono" style="background-image: url(./fondo.svg);"> --}}

<body class="bg-gray-100 scrollbar-thumb:bg-red-500 scrollbar-track:rounded">
    @inertia

    <div id="app">
        @yield('app')
    </div>

</body>

</html>
