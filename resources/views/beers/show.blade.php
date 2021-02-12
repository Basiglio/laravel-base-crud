@extends('layouts/main_layout')


@section('header')
     <header>
    <div class="container">
      <h1>Descrizione Birra: {{$beer->name}}</h1>
    </div>
  </header>
@endsection

@section('content')
    <div class="container">
      @if (session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
      @endif
      <table class="table table-dark">
        <thead>
          <tr>
            <td>NOME</td>
            <td>PRODUTTORE</td>
            <td>PREZZO</td>
            <td>GRADI</td>
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