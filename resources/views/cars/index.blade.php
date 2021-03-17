{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Lista Auto')

{{-- MAIN --}}
@section('content')
    <div class="container">
        <h1>Lista Auto</h1>
        <div class="car_box">
            @foreach ($auto as $modello)    
                <div class="box">
                    <p>{{$modello->marca}}</p>
                    <a href="{{route('cars.show', ['car' => $modello->id])}}">{{$modello->modello}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection