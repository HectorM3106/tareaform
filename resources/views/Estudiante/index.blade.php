@extends('layout')
@section('title', 'Lista de Estudiante')
@section('contenido')
    <h1>Lista de Estudiantes</h1>
    <table style="text-align: center" class="table table-bordered table-hover table-responsive-xl">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo Alumno</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Modificación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    @foreach($estudiante as $estudiantes)
    <tr>
        <td> {{$estudiantes->name}}</td>
        <td>{{$estudiantes->code}}</td>
        <td>{{$estudiantes->created_at}}</td>
        <td>{{$estudiantes->updated_at}}</td>
        <td><a href="{{ route('estudiante.edit', $estudiantes->id) }}"><i title="Editar"
            class="fa fa-edit icon"></i></a>
</td>
    </tr>
    @endforeach
    </tbody>
    </table>

@endsection