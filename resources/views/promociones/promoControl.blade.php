@extends('layouts.plantilla')

@section('content')
    <div class="border-bottom" style="text-align: center">


        <ul class="menu">
            <a href="1" class="btn btn-outline-primary">Control Embarazo</a>
            <a href="2" class="btn btn-outline-primary">Obstetricia</a>
            <a href="3" class="btn btn-outline-primary">Ginecología</a>
            <a href="4" class="btn btn-outline-primary">Infertilidad y Esterilidad</a>
            <a href="5" class="btn btn-outline-primary">Psicologia y Sexología</a>
        </ul>
    </div>

    <div class="container">

        <div class="row">
            @foreach ($promos as $item)
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $item->tipo_servicio }}</h5>
                        <p class="card-text">{{ $item['promocion']->id }}</p>
                        <p class="card-text">{{ $item->asunto }}</p>
                        {{-- <p class="card-text">{{ $item['promocion']->servicio }}</p> --}}
                        <p class="card-text">{{ $item->descripcion }}</p>
                        {{-- <p class="card-text">{{ $item['pormocion']->imagen }}</p> --}}
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        <a href="{{route('sendmail')}}" class="btn btn-primary">Enviar</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    </br>
    </br>
    </br>
    {{ $promos }}
@endsection
