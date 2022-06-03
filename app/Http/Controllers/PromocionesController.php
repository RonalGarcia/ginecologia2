<?php

namespace App\Http\Controllers;

use App\Models\Promociones;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Str;

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
        //
        // $request = Promociones::all();
        $promo = new Promociones;
        $promo->imagen = $request->imagen;
        $promo->servicio = $request->servicio;
        $promo->asunto = $request->asunto;
        $promo->descripcion = $request->descripcion;
        $imagen = $request->file('imagen')->store('img/post/', 'public');;
        /*      if ($request->hasFile("imagen")) {
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug('test') . "." . $imagen->guessExtension();
            $ruta = public_path("img/post/");

            $imagen->move($ruta, $nombreimagen);
            $request->imagen = $nombreimagen;
        } */
        return $imagen;
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
    }
}
