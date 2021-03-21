{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'CarDatabase | Modifica il modello')

{{-- MAIN --}}
@section('content')
<div class="container">
    <h2 class="text-center mb-4 text-uppercase">Modifica il modello</h2>
    <form method="post" action="{{route('cars.update', $modello->id)}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMarca">Marca</label>
                <input type="text" class="form-control" id="inputMarca" name="marca" value="{{$modello->marca}}">
            </div>

            <div class="form-group col-md-6">
                <label for="inputModello">Modello</label>
                <input type="text" class="form-control" id="inputModello" name="modello" value="{{$modello->modello}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputColore">Colore</label>
            <input type="text" class="form-control" id="inputColore" placeholder="Inserisci il Colore" name="colore" value="{{$modello->colore}}">
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputCavalli">Cavalli</label>
                <input type="number" class="form-control" id="inputCavalli" name="cavalli" value="{{$modello->cavalli}}">
            </div>

            <div class="form-group col-md-2">
                <label for="inputCilindri">Cilindri</label>
                <input type="number" class="form-control" id="inputCilindri" name="cilindri" value="{{$modello->cilindri}}">
            </div>

            <div class="form-group col-md-4">
                <label for="inputGuida">Guida</label>
                <input type="text" class="form-control" id="inputGuida" name="guida" value="{{$modello->guida}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPrezzo">Prezzo</label>
            <input type="text" class="form-control" id="inputPrezzo" placeholder="Inserisci il Prezzo" name="prezzo" value="{{$modello->prezzo}}">
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>
@endsection