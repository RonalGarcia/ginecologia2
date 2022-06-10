@extends('layouts.plantilla')

@section('content')
    <div class="border-bottom" style="text-align: center">
        <!-- <ul class="menu">
                                                                                                                                                                                <a href="1" class="btn btn-outline-primary">Control Embarazo</a>
                                                                                                                                                                                <a href="2" class="btn btn-outline-primary">Obstetricia</a>
                                                                                                                                                                                <a href="3" class="btn btn-outline-primary">Ginecología</a>
                                                                                                                                                                                <a href="4" class="btn btn-outline-primary">Infertilidad y Esterilidad</a>
                                                                                                                                                                                <a href="5" class="btn btn-outline-primary">Psicologia y Sexología</a>
                                                                                                                                                                            </ul> -->
    </div>
    <br>
    <h1>consultas</h1>
    <br>
    <div class="container">
        <div class="row">
            @foreach ($consultas as $consulta)
                <div class="card" style="width: 18rem; text-align: center;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        {{-- <p class="card-text">{{ $promociones->id }}</p> --}}
                        <h6>Paciente</h6>
                        <p class="card-text">{{ $consulta->paciente->nombre }}</p>
                        <h6>Fecha de consulta</h6>
                        <p class="card-text">{{ $consulta->fecha }}</p>
                        <h6>Semana de Amenorrea</h6>
                        <p class="card-text">{{ $consulta->amenorrea }}</p>
                        <h6>Náusea - Vómito</h6>
                        <p class="card-text">{{ $consulta->nauseas }}</p>
                        <h6>Cefalea</h6>
                        <p class="card-text">{{ $consulta->cefalea }}</p>
                        <h6>Edema</h6>
                        <p class="card-text">{{ $consulta->edena }}</p>
                        <h6>Movimientos Fetales</h6>
                        <p class="card-text">{{ $consulta->movimientosfetales }}</p>
                        <h6>Peso Corporal</h6>
                        <p class="card-text">{{ $consulta->pesocorporal }}</p>
                        <h6>Tensíon Arterial</h6>
                        <p class="card-text">{{ $consulta->tensionarterial }}</p>
                        <h6>Altura Uterina</h6>
                        <p class="card-text">{{ $consulta->alturauterina }}</p>
                        <h6>Lat. Card. Fetal</h6>
                        <p class="card-text">{{ $consulta->latfetal }}</p>
                        <h6>Situación / Presentación</h6>
                        <p class="card-text">{{ $consulta->situacion }}</p>


                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="{{ route('show', $consulta->id_paciente) }}" class="btn btn-primary">Enviar</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>



    {{-- {{ $promos }} --}}
@endsection
