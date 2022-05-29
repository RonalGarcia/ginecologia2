@extends('layouts.plantilla')

@section('content')
    <div class="row">

        <div class="col">
            <h1>Registro paciente</h1><br>


            <form action="/guardar" method="POST">

                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el nombre aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Edad</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la edad aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label><br>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el email aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Número</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
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

        <div class="col">
            <h1>Generar cita</h1><br>


            <form action="{{ route('crear.cita') }}" method="POST">
                @csrf
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el nombre aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Asunto</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la edad aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Descripción</label><br>
                    <div class="col-sm-10">
                        <input type="email" name="" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el email aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Fecha</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
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
    </div>
@endsection
