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
    <br>
    <h1>Promoción Disponibles</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($promos as $item)
                @foreach ($item['promocion'] as $promociones)
                    <div class="card" style="width: 18rem; text-align: center;">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $item->tipo_servicio }}</h5>
                            {{-- <p class="card-text">{{ $promociones->id }}</p> --}}
                            <p class="card-text">{{ $promociones->asunto }}</p>
                            {{-- <p class="card-text">{{ $item['promocion']->servicio }}</p> --}}
                            <p class="card-text">{{ $promociones->descripcion }}</p>
                            {{-- <p class="card-text">{{ $item['pormocion']->imagen }}</p> --}}
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('promociones.destroy', $promociones->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary">Borrar</button>
                                </form>
                            </div>
                            <div class="col">
                                <a href="{{ route('sendmail', $promociones->id) }}" class="btn btn-primary">Enviar</a>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            @endforeach
        </div>

    </div>
    </br>
    </br>
    </br>
    {{-- {{ $promos }} --}}
@endsection
