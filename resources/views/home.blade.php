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
<body>
  <div class="container">
    <h1>ciao</h1>
    <h2>ciao 2</h2>

  @php
      dump($beers);
  @endphp
  </div>
</body>
</html>