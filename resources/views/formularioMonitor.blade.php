@extends('plantilla')
@section('title', 'InformacionMonitor')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/formularioInfor.css') }}">
<form class="conbody" method="POST" action="{{url('registroMonitor')}}">
    {{ csrf_field()}}
    <h1>REGISTRO DE MONITORES</h1>
    <div class="textoh6">
        <h6 >-Por favor complete esta información para finalizar su registro.</h6>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Nombre monitor:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre Administrador" value="{{ Auth::user()->name }}" readonly required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputState">Codigo del estudiante:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="Ingrese Codigo" placeholder="Codigo" required>
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
            <label for="inputState">Programa:</label>
            <select name="programa" id="programa" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (nombrePrograma() as $nombrePrograma)
                  <option value="{{$nombrePrograma->nombre}}">{{$nombrePrograma->nombre}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputState">Semestre:</label>
            <select name="semestre" id="semestre" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (semestre() as $semestre)
                  <option value="{{$semestre->semestre}}">{{$semestre->semestre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
            <label for="inputState">Sala:</label>
            <select name="sala" id="sala" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (sala() as $sala)
                  <option value="{{$sala->sala}}">{{$sala->sala}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Horario:</label>
            <select name="horario" id="horario" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (horario() as $horario)
                  <option value="{{$horario->horario}}">{{$horario->horario}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputState">Nombre del administrador:</label>
        <input type="text" class="form-control" id="administrador" name="administrador" aria-describedby="emailHelp" placeholder="Nombre Administrador" value="{{ Auth::user()->name }}" readonly required>
    </div>
    <div style="text-align:center;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection