{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Car DataBase | Dettagli modello')

{{-- MAIN --}}
@section('content')
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Modello</th>
                <th scope="col">Motore</th>
                <th scope="col">Cavalli</th>
                <th scope="col">Guida</th>
                <th scope="col">Colore</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$modello->marca}}</td>
                <td>{{$modello->modello}}</td>
                <td>V{{$modello->cilindri}}</td>
                <td>{{$modello->cavalli}} CV</td>
                <td>{{$modello->guida}}</td>
                <td>{{$modello->colore}}</td>
                <td>~{{$modello->prezzo}}€</td>
            </tr>
        </tbody>
    </table>
@endsection