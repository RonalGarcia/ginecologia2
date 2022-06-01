<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //peticion a la base de datos
    public function getServicio()
    {
        $services = Servicio::all();
        echo json_encode($services);
        // return view('citas', $services);
    }

    public function create(Request $request)
    {
        $data = $request->all();
    }
}
