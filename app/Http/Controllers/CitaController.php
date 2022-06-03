<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all(); //consulta a DB SQL
        $servicios = Servicio::all(); //consulta a DB SQL
        return view(
            'citas.create',
            [
                'servicios' => $servicios,
                'pacientes' => $pacientes
            ]
        );
    }
    public function agenda()
    {
        $servicios = Cita::with('servicio', 'paciente')->get();

        return view('citas.agenda', ['agenda' => $servicios]);
    }
    public function crearCita()
    {
        echo "el tio hentai,asdasdsadasd";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*  $data =  [
            'id_paciente' => $request->get('id_paciente'),

            'id_servicio' => $request->get('id_servicio')
        ]; */
        $data = new Cita([
            'id_paciente' => $request->get('id_paciente'),
            'id_servicio' => $request->get('id_servicio'),
            'asunto' => $request->get('asunto'),
            'descripcion' => $request->get('descripcion'),
            'fecha' => $request->get('fecha'),
            'hora' => $request->get('hora'),


        ]);
        //$data = $request->all();
        //Cita::create($data);
        $data->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
