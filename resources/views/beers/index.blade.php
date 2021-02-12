@extends('layouts/main_layout')

@section('header')
     <header>
    <div class="container">
      <h1>Le Mie Birre</h1>
    </div>
  </header>
@endsection

@section('content')
  <div class="container">
    <div class="container">
      @if (session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
      @endif
    <table class="table table-dark">
      <thead>
        <tr>
          {{-- <td>POSIZIONE ARRAY</td> --}}
          {{-- <td>ID</td> --}}
          <td>NOME</td>
          <td>PRODUTTORE</td>
          <td>PREZZO</td>
          <td>GRADI</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $key => $beer)
            <tr>
              {{-- <td>{{$key}}</td> --}}
              {{-- <td>{{$beer->id}}</td> --}}
              <td>{{$beer->name}}</td>
              <td>{{$beer->producer}}</td>
              <td>{{$beer->price}} €</td>
              <td>{{$beer->grade}}</td>
              <td>
                {{-- AL CLICK SUL LINK PASSA L'ID DEL PRODOTTO ALLA QUERY --}}
                <a href="{{route('beers.show', ['beer' => $key])}}" class="btn btn-warning">MOSTRA</a>
              </td>
              <td>
                {{-- AL CLICK SUL LINK PASSA L'ID DEL PRODOTTO ALLA QUERY --}}
                <a href="{{route('beers.edit', ['beer' => $key])}}" class="btn btn-warning">MODIFICA</a>
              </td>
              <td>
                <form action="{{route('beers.destroy', $beer)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-warning">CANCELLA</button>
                </form>
              </td>
            </tr>
            @endforeach
      </tbody>
    </table>
    <a href="{{route('home')}}" class="btn btn-danger">lascia console amministratore</a>
    <a href="{{route('beers.create')}}" class="btn btn-primary">Aggiungi Birra</a>
  </div>
@endsection
