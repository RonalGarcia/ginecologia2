@extends('layouts.plantilla')

@section('content')
    <div class="row">
        <div class="col">
            <form method="get">
                @csrf
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
                            @foreach ($consultas as $con)
                                <td>

                                    <div class="col-sm-12">
                                        <input type="text" name="fecha" value="{{ $con->fecha }}" class="form-control">
                                    </div>
                                </td>
                            @endforeach
                        </tr>

                        <tr>
                            <th scope="row">Semana de Amenorrea</th>
                            @foreach ($consultas as $con)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="amenorrea" value="{{ $con->amenorrea }}"
                                            class="form-control">
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <tr>
                            <th scope="row">Náusea - Vómito</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="nauseas" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Cefalea</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="cefalea" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Edema</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="edena" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Movimientos Fetales</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="movimientosfetales" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Peso Corporal</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="pesocorporal" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Tensíon Arterial</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="tensionarterial" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Altura Uterina</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="alturauterina" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row"> Lat. Card. Fetal</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="latfetal" class="form-control">
                                    </div>
                                </td>
                            @endfor
                        </tr>
                        <tr>
                            <th scope="row">Situación / Presentación</th>

                            @for ($i = 1; $i <= 9; $i++)
                                <td>
                                    <div class="col-sm-12">
                                        <input type="text" name="situacion" class="form-control">
                                    </div>
                                </td>
                            @endfor
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
    </div>
@endsection
