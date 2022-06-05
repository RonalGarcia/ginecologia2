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
        //$services = Servicio::all();
        return view('promociones.promoControl', ['promos' => $promos]);
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
        //$post=$request->all();
        $post = new Promociones();

        $post->servicio = $request->servicio;
        $post->asunto = $request->asunto;
        $post->descripcion = $request->descripcion;
 /*        $email= "sabbathkvlt@gmail.com";   
            Mail::to($email)->send(new Promocion());        
        return $email; */
    }
    public function sendmail()
    {
        //$post=$request->all();
        $post = new Promociones(); 
        $promociones = Servicio::with('promocion')->where('id', 1)->get();;
        $pacientes = Paciente::all();
        foreach ($pacientes as $key) {
            # code...
           // $correo= json_encode($key['email']);
            Mail::to($key['email'])->send(new Promocion());  
            //echo $promociones;
           //echo $correo;

        }
        
     }
       // $pacientes_email= $pacientes['email'];
       
/*         $post->servicio = $request->servicio;
        $post->asunto = $request->asunto;
        $post->descripcion = $request->descripcion;
        $email= "sabbathkvlt@gmail.com";   
            Mail::to($email)->send(new Promocion());        
        return $email; */

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
    }
}
