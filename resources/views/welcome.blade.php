@extends('layouts.plantilla')

@section('content')
    <h1>Resumen de agenda</h1><br>

    <div class="row">
        <div class="col-6">
            <div class="table-responsive">
                <div class="tabla">
                    <table class="table table-resposive table-sm">
                        <thead>
                            <tr>
                                <th scope="row">Pendientes</th>
                                <th scope="row">Concluidos</th>
                                <th scope="row">Re-programados</th>
                                <th scope="row">Cancelados</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>5</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <button type="button" class="btn btn-outline-primary">Ver todo</button>
        </div>

        <div class="col-6">
            <div class="container_citas">
                <div class="citas_hoy">
                    <h4>Citas Agendadas El Dia De Hoy</h4>
                    <h3>5<h3>
                            <img class="img1" src="{{ asset('css/icono_cita.png') }}">
                </div>
            </div>
            <div class="container_citas">
                <div class="citas_faltantes">
                    <h4> Citas Faltantes Del Dia De Hoy</h4>
                    <h3>10<h3>
                            <img class="img2" src="{{ asset('css/icono_advertencia.png') }}">
                </div>
            </div>
        </div>

    </div>
@endsection
