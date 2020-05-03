@extends('modMonitor')

@section('contenido')
<form class="container" method="POST" action="{{url('perdidas')}}" style="width: 50%;">
    {{ csrf_field()}}
    <h1 style="text-align: center">REPORTAR PERDIDAS EN SALA</h1>
    <div class="form-group">
        <label for="inputAddress">Monitor</label>
        <input type="text" class="form-control" id="monitor" name="monitor" value="{{ Auth::user()->name }}"readonly>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sede">Sede</label>
            <select id="sede" class="form-control" name="sede">
            <option value="">Seleccionar--</option>
            <option value="Prado alto">Prado alto</option>
            <option value="Quirinal">Quirinal</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="sala">Sala</label>
            <select id="sala" class="form-control" name="sala">
            <option value="">Seleccionar--</option>
            <option value="C4-11">C4-11</option>
            <option value="B2-208">B2-208</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="equipo">Equipo</label>
        <select id="equipo" class="form-control" name="equipo">
            <option value="">Seleccionar--</option>
            <option value="PC 1">PC 1</option>
            <option value="PC 2">PC 2</option>
            <option value="PC 3">PC 3</option>
            <option value="PC 4">PC 4</option>
            <option value="PC 5">PC 5</option>
            <option value="PC 6">PC 6</option>
            <option value="PC 7">PC 7</option>
            <option value="PC 8">PC 8</option>
            <option value="PC 9">PC 9</option>
            <option value="PC 10">PC 10</option>
        </select>
    </div>
    <div class="form-group">
      <label for="inputAddress">Objeto</label>
      <input type="text" class="form-control" id="objeto" name="objeto" placeholder="Ingrese objeto perdido">
    </div>
    <div class="form-group">
      <label for="inputAddress">Descripcion</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection