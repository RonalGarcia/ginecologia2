<?php

namespace App\Http\Controllers;

use App\Models\Consultas;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $consultas = Consultas::all();
        // $seguimiento = Seguimiento::all();
        $consultas = Consultas::with('paciente')->get();
        return view('verconsultas', [
            'consultas' => $consultas,

        ]);
        //return $consultas;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return Consultas::create($data);
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
        //$consulta = new Consultas;
        //$consulta = $request->id_paciente;
        $data = $request->all();

        Consultas::create($data);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function show(Consultas $consultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultas $consultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultas $consultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultas $consultas)
    {
        //
    }
}
