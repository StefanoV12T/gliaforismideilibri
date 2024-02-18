<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gli Aforismi dei Libri</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{!! asset('favicon5.ico') !!}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-navbar/>
    {{$slot}}  
    @include('cookie-consent::index') 
    <x-footer/>
  </body>
</html>