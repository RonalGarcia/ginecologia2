@extends('layouts.plantilla')

@section('content')
    //carrusel
    <div class="row">
        <h1>Crear Promoción</h1><br>
        {{ $services }}

        <form role="form" action="{{ route('crearPromo') }}" method=" POST" enctype="multipart/form-data">
            @csrf
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
                        placeholder="Inserte la edad aquí">
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Servico</label><br>
                <div class="col-sm-10">
                    <select class="form-control form-control-lg" name="servicio">
                        @foreach ($services as $servicio)
                            <option value="{{ $servicio->id }}">{{ $servicio->tipo_servicio }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Imagen</label><br>
                <div class="col-sm-10">
                    <input type="file" name="imagen" class="form-control form-control-lg" id="colFormLabelLg"
                        placeholder="Inserte el número aquí">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
