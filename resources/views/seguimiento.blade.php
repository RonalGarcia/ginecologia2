@extends('layouts.plantilla')

@section('content')
    <div class="row">

        <div class="col">
            <h1>Seguimiento paciente</h1><br>


            <form action="{{ route('crearSeguimiento') }}" method="POST">
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
                {{-- <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div> --}}
                {{-- </form> --}}
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        {{-- <form action="" method="POST">
            @csrf --}}
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">Consulta num.</th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Fecha de consulta</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fecha9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Semana de Amenorrea</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="amenorrea9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Náusea - Vómito</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="vomito9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Cefalea</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="cefalea9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Edema</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="edema9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Movimientos Fetales</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetales9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Peso Corporal</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="corporal9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tensíon Arterial</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="tension9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Altura Uterina</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="altura9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Lat. Card. Fetal</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="fetal9" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Situación / Presentación</th>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion1" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion2" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion3" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion4" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion5" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion6" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion7" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion8" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-12">
                            <input type="text" name="situacion9" class="form-control">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        </form>
    </div>
@endsection
