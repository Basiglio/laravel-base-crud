@extends('layouts/main_layout')




@section('content')
<div class="container">
  {{-- LA PRESSIONE DEL SUBMIT RITORNA I MIEI DATI ALL ROUTE STORE CHE ELABORA I DATI E LI SALVA NEL DATABASE --}}
  <form action="{{route('beers.store')}}" method="post">
    {{-- TOKEN DI SICUREZZA --}}
    @csrf
    {{-- METODO DELLA CHIAMATA --}}
    @method('POST')
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci Nome Birra">
      </div>
      <div class="form-group col-md-6">
        <label for="producer">Produttore</label>
        <input type="text" class="form-control" name="producer" id="producer" placeholder="Inserisci Nome Produttore">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo">
      </div>
      <div class="form-group col-md-6">
        <label for="grade">Gradi</label>
        <input type="number" class="form-control" name="grade" id="grade" placeholder="Inserisci il numero dei gradi ">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
  </form>
</div>
@endsection