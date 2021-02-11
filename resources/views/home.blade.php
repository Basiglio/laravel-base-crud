<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- BOOTSTRAP --}}
  <link rel="stylesheet" href="{{asset('js/app.js')}}">
  {{-- MY CSS --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body class="menu_admin">
  <div class="box">
    <h2>LA MIA BIRRERIA</h2>
    <h2>ENTRA COME AMMINISTRATORE</h2>
    <h3>--><a href="{{route('beers.index')}}">clicca qui</a><--</h3>
  </div>
</body>
</html>