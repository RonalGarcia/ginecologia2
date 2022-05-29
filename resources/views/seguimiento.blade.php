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
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Esposo</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el email aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso Anterior</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Talla</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Gestas</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Paridad</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Abortos</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Cesarias</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">FUR</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">FPP</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Fuma en este
                        embarazo?</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Número de cigarros
                        diarios</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Alcoholismo</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                //agregar datos pendientes
                <h1>Antecedentes familiares</h1>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Diabetes</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TB Pulmonar</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Otros
                        (Describir)</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Luéticas</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <h4>Embarazada</h4>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Grupo</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">RH</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <h4>Esposo</h4>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Grupo</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">RH</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg"
                        class="col-sm-2 col-form-label col-form-label-lg">Sensibilización</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Antecedentes
                        Transfusión</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso Anterior</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <h1>Antecedentes personales</h1>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Cardiopatías</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Hipertensión
                        Arterial</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Diabetes</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Inf. Primaria</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">TB pulmonar</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Interv.
                        Quirúrgica</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Patol.
                        Psiquiátrica</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Rubeola</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Convulsiones</label><br>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                            placeholder="Inserte el número aquí">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Otros
                        (Describir)</label><br>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Semana de Amenorrea</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Náusea - Vómito</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Cefalea</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Edema</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Movimientos Fetales</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Peso Corporal</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Tensíon Arterial</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Altura Uterina</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Lat. Card. Fetal</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Situación / Presentación</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
