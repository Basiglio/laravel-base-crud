<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;


class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // PASSO LA VISTA DELLA CREAZIONE
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // DATA è UNA CONVENZIONE
        $data = $request->all();

        // CREO NUOVO OGGETT DI CLASSE BEER
        $newBeer = new Beer;
        // ASSOCIO I DATI PRESI DAL FORM ALLE CHIAVI DEL DATABASE
        $newBeer -> name =  $data['name'];
        $newBeer -> producer =  $data['producer'];
        $newBeer -> price =  $data['price'];
        $newBeer -> grade =  $data['grade'];
        // SALVO I DATI NEL DATABASE
        $newBeer -> save();

        // FACCIO IL RETURN SULLA VISTA DELL'ELENCO DELLE BIRRE
        return redirect() -> route('beers.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        //$beer = Beer::find($id);
       
        return view('beers.show', compact('beer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
