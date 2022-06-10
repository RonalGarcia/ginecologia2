@extends('layouts.plantilla')

@section('content')
    <div class="row">

        <div class="col">
            <h1>Seguimiento paciente</h1><br>


            <form action="{{ route('crearSeguimiento') }}" method="POST">
                @csrf
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Paciente</label><br>
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
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Edad</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="edad" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la edad aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Esposo</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="nombreesposo" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el nombre aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso Anterior</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="pesoanterior" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el peso aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Talla</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="talla" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la talla aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Gestas</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="gestas" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la gesta aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Paridad</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="paridad" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la paridad aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Abortos</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="abortos" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número de abortos aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Cesarias</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="cesarias" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número de cesarias aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">FUR</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="fur" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el FUR aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">FPP</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="fpp" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el FPP aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Fuma en este
                        embarazo?</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="fuma" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Número de cigarros
                        diarios</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="numcigarros" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número de cigarros aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Alcoholismo</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="alcoholismo" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">VIH</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="vih" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">VORL</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="vorl" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">HB</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="hb" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Glicemia</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="glicemia" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">EGO</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="ego" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <h1>Antecedentes familiares</h1>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Diabetes</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="diabetes" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TB Pulmonar</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="tbpulmonar" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Otros
                        (Describir)</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="otros" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte los otros padecimientos aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Luéticas</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="lueticas" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <h4>Embarazada</h4>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Grupo</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="grupo" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el Grupo aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">RH</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="rh" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el RH aquí">
                    </div>
                </div>
                <br>
                <h4>Esposo</h4>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Grupo</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="grupo2" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el Grupo aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">RH</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="rh2" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el RH aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg"
                        class="col-sm-2 col-form-label col-form-label-lg">Sensibilización</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="sensibilizacion" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Antecedentes
                        Transfusión</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="anttrans" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso Anterior</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="pesoanterior2" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el peso aquí">
                    </div>
                </div>
                <br>
                <h1>Antecedentes personales</h1>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Cardiopatías</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="cardiopatias" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Hipertensión
                        Arterial</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="hipertension" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Diabetes</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="diabetes2" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Inf. Primaria</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="infprimaria" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TB pulmonar</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="tbpulmonar2" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Interv.
                        Quirúrgica</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="intquir" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Patol.
                        Psiquiátrica</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="patpsi" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Rubeola</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="rubeola" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Convulsiones</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="convulciones" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Otros
                        (Describir)</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="otrosdos" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte los otros padecimientos aquí">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>


    <div class="row">

        <div class="col">

            <form action="{{ route('crearConsulta') }}" method="POST">
                @csrf
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Paciente</label><br>
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
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Fecha de
                        consulta</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="fecha" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el nombre aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Semana de
                        Amenorrea</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="amenorrea" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el peso aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Náusea -
                        Vómito</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="nauseas" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la talla aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Cefalea</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="cefalea" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la gesta aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Edema</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="edena" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte la paridad aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Movimientos
                        Fetales</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="movimientosfetales" class="form-control form-control-lg"
                            id="colFormLabelLg" placeholder="Inserte el número de abortos aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso Corporal</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="pesocorporal" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número de cesarias aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Tensíon
                        Arterial</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="tensionarterial" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el FUR aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Altura
                        Uterina</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="alturauterina" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el FPP aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Lat. Card.
                        Fetal</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="latfetal" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte SI o NO aqui">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Situación /
                        Presentación</label><br>
                    <div class="col-sm-10">
                        <input type="text" name="situacion" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número de cigarros aquí">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
