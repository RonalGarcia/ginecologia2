@extends('layouts.plantilla')

@section('content')
    <div class="row">
        <h1>Generar cita</h1>

        <form action="{{ route('crearCita') }}" method="POST">
            <br>
            @csrf
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label><br>
                <div class="col-sm-10">
                    <select class="form-control form-control-lg" name="id_paciente">
                        @foreach ($pacientes as $cliente)
                            <option value="{{ $cliente['id'] }}">{{ $cliente->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Servicio</label><br>
                <div class="col-sm-10">
                    <select class="form-control form-control-lg" name="id_servicio">
                        @foreach ($servicios as $servicio)
                            <option value="{{ $servicio['id'] }}">{{ $servicio->tipo_servicio }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Asunto</label><br>
                <div class="col-sm-10">
                    <input type="text" name="asunto" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte la edad aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Descripción</label><br>
                <div class="col-sm-10">
                    <input type="text" name="descripcion" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el email aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Fecha</label><br>
                <div class="col-sm-10">
                    <input type="date" name="fecha" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el número aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Hora</label><br>
                <div class="col-sm-10">
                    <input type="time" name="hora" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte la hora aquí">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Agendar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
