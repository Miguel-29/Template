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
                    <div class="row">
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="marca" placeholder="Marca">
                        <label for="marca">Marca</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="serial" placeholder="serial">
                        <label for="serial">Numero de serial</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="referencia" placeholder="referencia">
                        <label for="referencia">Referencia</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="fechaIngreso" placeholder="fechaIngreso">
                        <label for="fechaIngreso">Fecha de ingreso</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="mtto" placeholder="mtto">
                        <label for="mtto">Periodo de mantenimiento</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <input type="text" class="form-control" id="color" placeholder="color">
                        <label for="color">Color</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-6">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Categorias</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Muebles">Muebles</option>
                        </select>
                        <label for="floatingSelect">Seleccionar categoria</label>
                    </div>
                    <div class="form-floating mb-3  col-sm-6">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Aulas</option>
                            <option value="1">aqui deben aparecer las aulas registradas</option>
                        </select>
                        <label for="floatingSelect">Seleccione aula</label>
                    </div>
                    <div class="form-floating offset-sm-3 col-sm-6">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Profesores</option>
                            <option value="1">aqui deben aparecer los profesores registrados</option>
                        </select>
                        <label for="floatingSelect">Seleccione profesor</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
