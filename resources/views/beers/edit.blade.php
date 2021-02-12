@extends('layouts/main_layout')

@section('header')
     <header>
    <div class="container">
      <h1>Modifica Birra</h1>
    </div>
  </header>
@endsection


@section('content')
<div class="container">

{{-- SE SCATTA ALMENO UN ERRORE BLOCCA LA RICHIESTA E RESTIUISCI UN AVVISO ALL'UTENTE --}}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  {{-- LA PRESSIONE DEL SUBMIT RITORNA I MIEI DATI ALL ROUTE STORE CHE ELABORA I DATI E LI SALVA NEL DATABASE --}}
  <form action="{{route('beers.update', $beer)}}" method="post">
    {{-- TOKEN DI SICUREZZA --}}
    @csrf
    {{-- METODO DELLA CHIAMATA --}}
    @method('PUT')

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci Nome Birra" value="{{$beer->name}}">
      </div>
      <div class="form-group col-md-6">
        <label for="producer">Produttore</label>
        <input type="text" class="form-control" name="producer" id="producer" placeholder="Inserisci Nome Produttore" value="{{$beer->producer}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo" value="{{$beer->price}}">
      </div>
      <div class="form-group col-md-6">
        <label for="grade">Gradi</label>
        <input type="number" step="0.01" class="form-control" name="grade" id="grade" placeholder="Inserisci il numero dei gradi" value="{{$beer->grade}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
  </form>
  <a href="{{route('beers.index')}}" class="btn btn-warning" id="back_btn">INDIETRO</a>
</div>
@endsection