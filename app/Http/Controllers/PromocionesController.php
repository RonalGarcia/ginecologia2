<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Mail;
use App\Mail\Promocion;
use App\Mail\Informacion;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Servicio::all();
        return view('promociones.promociones', ['services' => $services]);
    }

    public function promoControl($id)
    {
        //
        // $request = 2;
        $promos = Servicio::with('promocion')->where('id', $id)->get();
        //return $promos;
        return view('promociones.promoControl', ['promos' => $promos]);
        //$services = Servicio::all();
        //return view('promociones.promoControl', ['promos' => $promos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $post = $request->all();
        $post = new Promociones();

        $post->servicio = $request->servicio;
        $post->asunto = $request->asunto;
        $post->descripcion = $request->descripcion;
        $post->imagen = $request->imagen;
        $services = Servicio::all();
        $post->save();
        return view('promociones.promociones', ['services' => $services]);
    }
    public function sendmail($id)
    {
        //$promociones = Servicio::with('promocionEnviar')->where('id', $id)->get();
        $promociones = Promociones::find($id);
        //return $promociones;
        Mail::send(
            'email.email',
            [
                'asunto' => $promociones->asunto,
                'descripcion' => $promociones->descripcion,
            ],
            function ($message) {
                $pacientes = Paciente::all();
                foreach ($pacientes as $key) {
                    # code...
                    $correos = $key['email'];
                    $message->to($correos)
                        ->subject('Nuevas Promociones');
                }
            }
        );
        return redirect()->route('promociones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function show(Promociones $promociones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function edit(Promociones $promociones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promociones $promociones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promociones  $promociones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promociones $promociones)
    {
        //
        if ($promociones->delete()) {
            return redirect()->route('promociones');
        }

        // return $promociones;
    }
}
