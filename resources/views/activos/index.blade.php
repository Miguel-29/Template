@extends('layouts.template')
@section('title')
    'Activos fijos'
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                        <caption>List of users</caption>
                        <thead class="table-dark">
                        <tr>
                            <td>Marca</td>
                            <td>Color</td>
                            <td>Referencia</td>
                            <td>Serial</td>
                            <td>Categoria</td>
                            <td>Fecha de ingreso</td>
                            <td>Mantenimiento</td>
                            <td>Responsable</td>
                            <td>Aula</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

