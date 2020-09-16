<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Radios + Clima + Noticias + Juegos</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/svg" href="./audio.svg">
    {{-- <link rel="stylesheet" href="{{asset('css/main.css')}}"> --}}
    <script src="{{ mix('/js/app.js?v='.filemtime(public_path('js/app.js'))) }}" defer></script>
  </head>
  <body class="bg-gray-100">
    @inertia
  </body>
  <footer>
    <div class="z-10" style="position: fixed; bottom: 0px; width: 100%; text-align: center;">
      <iframe 
            autoplay="true"
            id="myIFrame" 
            src="" 
            style="width:100%; height:100px;"
            scrolling="no"
            frameborder="no"
        >
      </iframe>
    </div>
  </footer>
</html>