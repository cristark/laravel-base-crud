{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'CarDatabase | Inserisci un nuovo modello')

{{-- MAIN --}}
@section('content')
<div class="container">
    <h2 class="text-center mb-4 text-uppercase">Inserisci un nuovo modello</h2>
    <form method="post" action="{{route('cars.store')}}">
        @csrf
        @method('POST')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputMarca">Marca</label>
                <input type="text" class="form-control" id="inputMarca" placeholder="Inserisci la Marca" name="marca" maxlength="35" required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputModello">Modello</label>
                <input type="text" class="form-control" id="inputModello" placeholder="Inserisci il Modello" name="modello" maxlength="30" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputColore">Colore</label>
            <input type="text" class="form-control" id="inputColore" placeholder="Inserisci il Colore" name="colore" maxlength="30" required>
        </div>

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputCavalli">Cavalli</label>
                <input type="number" class="form-control" id="inputCavalli" name="cavalli" required>
            </div>

            <div class="form-group col-md-2">
                <label for="inputCilindri">Cilindri</label>
                <input type="number" class="form-control" id="inputCilindri" name="cilindri" required>
            </div>

            <div class="form-group col-md-4">
                <label for="inputGuida">Guida</label>
                <input type="text" class="form-control" id="inputGuida" name="guida" maxlength="3">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPrezzo">Prezzo</label>
            <input type="text" class="form-control" id="inputPrezzo" placeholder="Inserisci il Prezzo" name="prezzo">
        </div>

        <button type="submit" class="btn btn-primary">Conferma</button>
    </form>
</div>
@endsection