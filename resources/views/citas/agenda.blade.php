@extends('layouts.plantilla')

@section('content')
    <div class="container">

        <div class="row">
            @foreach ($agenda as $item)
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $item['asunto'] }}</h5>
                        <p class="card-text">{{ $item['paciente']->nombre }}</p>
                        <p class="card-text">{{ $item->fecha }}</p>
                        <p class="card-text">{{ $item->hora }}</p>
                        <p class="card-text">{{ $item['servicio']->tipo_servicio }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
