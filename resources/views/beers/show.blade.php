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
    <table class="table table-dark">
      <thead>
        <tr>
          <td>POSIZIONE ARRAY</td>
          <td>ID</td>
          <td>NOME</td>
          <td>PRODUTTORE</td>
          <td>PREZZO</td>
          <td>GRADi</td>
        </tr>
      </thead>
      <tbody>
            <tr>
              {{-- <td>{{$key}}</td> --}}
              <td>{{$beers->id}}</td>
              <td>{{$beers->name}}</td>
              <td>{{$beers->producer}}</td>
              <td>{{$beers->price}} €</td>
              <td>{{$beers->grade}}</td>
            </tr>
      </tbody>
    </table>
  </div>
</body>
</html>