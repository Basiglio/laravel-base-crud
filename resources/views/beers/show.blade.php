@extends('layouts/main_layout')


@section('content')
    <div class="container">
      <table class="table table-dark">
        <thead>
          <tr>
            <td>NOME</td>
            <td>PRODUTTORE</td>
            <td>PREZZO</td>
            <td>GRADi</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$beer->name}}</td>
                <td>{{$beer->producer}}</td>
                <td>{{$beer->price}} €</td>
                <td>{{$beer->grade}}</td>
              </tr>
        </tbody>
      </table>
      <a href="{{route('beers.index')}}" class="btn btn-warning" id="back_btn">INDIETRO</a>
    </div>
@endsection