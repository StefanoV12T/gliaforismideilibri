<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gli Aforismi dei Libri</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{!! asset('favicon5.ico') !!}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playpen+Sans:wght@100..800&display=swap" rel="stylesheet">

  </head>
  <body>
    <x-navbar/>
    <div main-content>
      {{$slot}}
    </div>
      

    {{-- coockie personalizzati --}}
    {{-- @include('cookie-consent::index')   --}}
    <footer class="footer">
      <x-footer/> 
      <x-banner-cookies/>
    </footer>
  </body>
</html>