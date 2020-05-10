@extends('modAdministrador')

@section('contenido')
<form class="container" method="POST" action="/Actualizar-Falla/{{ $users->id }}" style="width: 50%;">
    {{ csrf_field()}}
    {{ method_field('PUT')}}
    <h1 style="text-align: center">REVISAR FALLA</h1>
    <div class="form-group">
        <label for="inputAddress">Monitor</label>
        <input type="text" class="form-control" id="monitor" name="monitor" value="{{ $users->monitor}}" readonly>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Sede:</label>
            <input type="text" class="form-control" id="sede" name="sede" value="{{ $users->sede}}" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Sala:</label>
            <input type="text" class="form-control" id="sala" name="sala" value="{{ $users->sala}}" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Equipo:</label>
            <input type="text" class="form-control" id="equipo" name="equipo" value="{{ $users->equipo}}" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $users->descripcion}}"
                readonly>
        </div>
    </div>
    <div class="form-group">
        <label for="inputState">Estado:</label>
        <select name="estado" id="estado" class="form-control">
            <option value="{{$users->estado}}">{{$users->estado}}</option>
            <option value="Revisado">Revisado</option>
        </select>
    </div>
    <div style="text-align:center;">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="/Ver_Fallas" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection