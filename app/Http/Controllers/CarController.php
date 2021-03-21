<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Car::all();

        $data = [
            'auto' => $auto
        ];

        return view('cars.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'marca' => 'required|max:35',
            'modello' => 'required|max:30',
            'colore' => 'required|max:30',
            'cavalli' => 'required|numeric',
            'cilindri' => 'required|numeric',
            'guida' => 'alpha',
            'prezzo' => 'numeric',
        ]);

        $carsNew = new Car();

        $carsNew->fill($data);

        $carsNew->save();

        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        if($car) {
            
            $data = [
                'modello' => $car
            ];

            return view('cars.show', $data);
        }

        abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        if($car) {
            
            $data = [
                'modello' => $car
            ];

            return view('cars.edit', $data);
        }

        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();

        $request->validate([
            'marca' => 'required|max:35',
            'modello' => 'required|max:30',
            'colore' => 'required|max:30',
            'cavalli' => 'required|numeric',
            'cilindri' => 'required|numeric',
            'guida' => 'alpha',
            'prezzo' => 'numeric',
        ]);

        $car->update($data);

        return redirect()->route('cars.show', $car);
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
