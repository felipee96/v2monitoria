@extends('plantilla')
@section('title', 'InformacionAdministrador')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/formularioInfor.css') }}">
<form class="conbody" method="POST" action="{{url('registroAdmin')}}">
    {{ csrf_field()}}
    <h1>REGISTRO DE ADMINISTRADOR</h1>
    <div class="textoh6">
        <h6 >-Por favor complete esta información para finalizar su registro.</h6>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre" value="{{ Auth::user()->name }}" readonly required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputState">Cedula:</label>
            <input type="number" class="form-control" id="cedula" name="cedula" aria-describedby="Ingrese cedula" placeholder="Ingrese cedula" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Correo:</label>
        <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese correo" value="{{ Auth::user()->email }}" readonly required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Telefono:</label>
        <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" placeholder="Ingrese telefono"  required>
        </div>
    </div>
    <div style="text-align:center;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection