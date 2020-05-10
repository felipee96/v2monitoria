@extends('modAdministrador')

@section('contenido')
<form class="container" method="POST" action="/Actualizar-Monitor/{{ $users->id }}" style="width: 50%">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <h1 style="text-align: center">EDITAR MONITORES</h1>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Nombre y apellido:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre Administrador" value="{{ $users->nombre}}"  required>
        </div>

        <div class="form-group col-md-6">
            <label for="inputState">Codigo del estudiante:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="Ingrese Codigo" placeholder="Codigo" value="{{ $users->codigo}}" required>
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
            <label for="inputState">Programa:</label>
            <select name="programa" id="programa" class="form-control" >
                <option value="{{$users->programa}}">{{$users->programa}}</option>
                @foreach (nombrePrograma() as $nombrePrograma)
                  <option value="{{$nombrePrograma->nombre}}">{{$nombrePrograma->nombre}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputState">Semestre:</label>
            <select name="semestre" id="semestre" class="form-control">
                <option value="{{$users->semestre}}">{{$users->semestre}}</option>
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
                <option value="{{$users->sala}}">{{$users->sala}}</option>
                @foreach (sala() as $sala)
                  <option value="{{$sala->sala}}">{{$sala->sala}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Horario:</label>
            <select name="horario" id="horario" class="form-control">
                <option value="{{$users->horario}}">{{$users->horario}}</option>
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
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="/Ver_Monitores" class="btn btn-danger">Cancelar</a>
    </div>
</form>
    
@endsection