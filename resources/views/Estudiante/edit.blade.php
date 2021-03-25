@extends('layout')
@section('title', 'Editar Estudiante')
@section('contenido')
    <center>
        <h1>Editar Datos de Estudiante </h1>
    </center>
    <form action="{{ route('estudiante.update', $estudiante) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('put')
        <div class="form-row">
            <input type="hidden" name="id" value="{{$estudiante->id}}">
            <div class="col-md-4 mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{ $estudiante->name }}" placeholder="Nombre">
                @error('nombre')
                    <br>
                    <small>* {{ $message }}</small>
                    <br>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label>Codigo</label>
                <input type="text" class="form-control" name="codigo" value="{{ $estudiante->code }}" placeholder="Codigo de Alumno">
                @error('codigo')
                    <br>
                    <small>* {{ $message }}</small>
                    <br>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label>Carrera</label>
                <br>
                <select class="form-control" name="carrera_id" id="">
                    <option value="{{ $estudiante->carrera_id }}">{{$carreraActual->name}}</option>
                    @foreach($carrera as $carreras)
                    <option value="{{$carreras->id}}"> {{$carreras->name}} </option>
                    @endforeach
                </select>
                @error('carrera')
                    <br>
                    <small>* {{ $message }}</small>
                    <br>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <div class="form-check">
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <button class="btn btn-primary" type="submit">Guardar Datos</button>
            </div>
            <div class="col-md-5 mb-3">
            </div>
        </div>
    </form>

@endsection