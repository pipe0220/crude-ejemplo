<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCamioneroRequest;

class CamioneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camioneros = Camionero::all();
        return view('camioneros.index', compact('camioneros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $camionero = new Camionero();
        $camionero->nombre = $request->nombre;
        $camionero->poblacion=$request->poblacion;
        $camionero->telefono=$request->telefono;
        $camionero->direccion=$request->direccion;
        $camionero->salario=$request->salario;
        $camionero->save();

        return $camionero;
    }

    /**
     * Display the specified resource.
     */
    public function show(Camionero $camionero)
    {
        $camionero->load('camiones', 'paquetes');
        return view('camioneros.show', compact('camionero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camionero $camionero)
    {
        return view('camioneros.edit', compact('camionero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCamioneroRequest $request, Camionero $camionero)
    {
        $camionero->update($request->all());
        return redirect()->route('camioneros.show', $camionero->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camionero $camionero)
    {
        $camionero->delete();
        return redirect()->route('camioneros.index');
    }
}
