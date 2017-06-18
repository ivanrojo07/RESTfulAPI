<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;
use App\Fabricante;

class FabricanteVehiculoController extends Controller
{

    public function showAll()
    {
        return 'mostrar todos los vehiculos';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Fabricante $fabricante)
    {
        //
        return 'mostrando los vehiculos del fabricante con id'.$fabricante;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Fabricante $fabricante)
    {
        //
        return 'Mostrar formulario de creacion de vehiculo para fabricante con id'.$fabricante;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Fabricante $fabricante, Vehiculo $vehiculo )
    {
        //
        return 'Mostrando vehiculo'.$vehiculo.'del fabricante'.$fabricante;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Fabricante $fabricante, Vehiculo $vehiculo)
    {
        //
        return 'Mostrar formulario para modificar vehiculo'.$vehiculo.'del fabricante'.$fabricante;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Fabricante $fabricante, Vehiculo $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fabricante $fabricante, Vehiculo $vehiculo)
    {
        //
    }
}
