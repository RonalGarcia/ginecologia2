@extends('layouts.plantilla')

@section('content')
    <h1>Citas Pendientes</h1>
    <br>
    <div class="container">

        <div class="row">

            @foreach ($agenda as $item)
                <div class="card" style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h6>Paciente</h6>
                        <p class="card-text">{{ $item['paciente']->nombre }}</p>
                        <h6>Asunto</h6>
                        <p class="card-title"> {{ $item['asunto'] }}</p>
                        <h6>Descripción</h6>
                        <p class="card-title"> {{ $item['descripcion'] }}</p>
                        <h6>Fecha</h6>
                        <p class="card-text">{{ $item->fecha }}</p>
                        <h6>Hora</h6>
                        <p class="card-text">{{ $item->hora }}</p>
                        <h6>Tipo de consulta</h6>
                        <p class="card-text">{{ $item['servicio']->tipo_servicio }}</p>
                    </div>
                    <div class="col d-grid gap-2" style="text-align: center">
                        <form action="{{ route('cita.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Borrar</button>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>

    </div>
@endsection
