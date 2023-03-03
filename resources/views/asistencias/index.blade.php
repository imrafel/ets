@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="mb-4">Asistencia de Mecanica Automotriz - Matutina</h3>
    <div class="row justify-content-center">
        <table class="table">
            <tr>
                <th scope="col" rowspan="2" style="vertical-align: bottom;">Id</th>
                <th scope="col" rowspan="2" style="vertical-align: bottom;">Nombre</th>
                <th scope="col" rowspan="2" style="vertical-align: bottom;">Apellido</th>
                <td scope="col" colspan="4" style="text-align: center">Febrero</td>
                <td scope="col" colspan="4" style="text-align: center">Marzo</td>
                <td scope="col" colspan="4" style="text-align: center">Abril</td>
            </tr>
            <tr style="text-align: center">
                <td>12</td>
                <td>18</td>
                <td>25</td>
                <td>30</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Rafael</td>
                <td>Carranza</td>
                <td style="text-align: center">Si</td>
                <td style="text-align: center">No</td>
                <td style="text-align: center">No</td>
                <td style="text-align: center">PE</td>
            </tr>
        </table>
    </div>
</div>
@endsection