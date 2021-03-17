{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Modello {{modello->id}}')

{{-- MAIN --}}
@section('content')
    <div class="model_container">
        <h1>{{$modello->marca}}</h1>
        <h2>{{$modello->modello}}</h2>
        <p>V{{$modello->cilindri}} - {{$modello->cavalli}} CV</p>
        <p>Colore: {{$modello->colore}}</p>
        <p>Guida: {{$modello->guida}}</p>
        <p>Prezzo: ~{{$modello->prezzo}}€</p>
    </div>
@endsection