@extends('layouts/main_layout')


@section('content')
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
        @foreach ($beers as $key => $beer)
            <tr>
              <td>{{$key}}</td>
              <td>{{$beer->id}}</td>
              <td>{{$beer->name}}</td>
              <td>{{$beer->producer}}</td>
              <td>{{$beer->price}} €</td>
              <td>{{$beer->grade}}</td>
              <td>
                {{-- AL CLICK SUL LINK PASSA L'ID DEL PRODOTTO ALLA QUERY --}}
                <a href="{{route('beers.show', ['beer' => $key])}}" class="btn btn-warning">MOSTRA</a>
              </td>
            </tr>
            @endforeach
      </tbody>
    </table>
    <a href="{{route('home')}}" class="btn btn-danger">lascia console amministratore</a>
  </div>
@endsection
