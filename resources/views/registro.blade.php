@extends('layouts.plantilla')

@section('content')
    <h1>Registro paciente</h1>
    <br>
    <div class="row">
        <form role="form" action="{{ route('crearPaciente') }}" method="POST">
            @csrf
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label><br>
                <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el nombre aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Edad</label><br>
                <div class="col-sm-10">
                    <input type="text" name="edad" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte la edad aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label><br>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el email aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Número</label><br>
                <div class="col-sm-10">
                    <input type="text" name="telefono" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el número aquí">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
