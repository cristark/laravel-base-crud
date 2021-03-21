{{-- Estensione layout app principale --}}
@extends('layouts.app')

{{-- Sezione per aggiornare title --}}
@section('titolo', 'Car DataBase | Lista Auto')

{{-- MAIN --}}
@section('content')
    <div class="container">
        <h1>Lista Auto</h1>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modello</th>
                    <th scope="col">Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($auto as $modello) 
                <tr>
                    <th scope="row">{{$modello->id}}</th>
                    <td>{{$modello->marca}}</td>
                    <td>{{$modello->modello}}</td>
                    <td class="d-inline-flex">
                        <a class="btn btn-primary" href="{{route('cars.show', ['car' => $modello->id])}}">Dettagli</a>
                        <a class="btn btn-warning" href="{{route('cars.edit', ['car' => $modello->id])}}">Modifica</a>
                        <form method="post" action="{{route('cars.destroy', ['car' => $modello->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" href="">Elimina</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('cars.create')}}">Aggiungi un Nuovo Modello</a>
    </div>
@endsection