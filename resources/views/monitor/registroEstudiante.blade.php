@extends('modMonitor')

@section('contenido')
<form class="container" method="POST" action="{{url('control')}}" style="width: 50%;">
    {{ csrf_field()}}
    <h1 style="text-align: center">REGISTRO DE ESTUDIANTES</h1>
    <div class="form-row">
            <label for="inputState">Codigo del estudiante:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="Ingrese Codigo" placeholder="Codigo">
        </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Nombre del estudiante:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Ingrese Nombre" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Apellido del estudiante:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="Ingrese Apellido" placeholder="Apellido">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="facultad">Programa</label>
            <select id="programa" class="form-control" name="programa">
            <option value="">Seleccionar--</option>
            <option value="SISTEMAS">SISTEMAS</option>
            <option value="MECATRONICA">MECATRONICA</option>
            <option value="INDUSTRIAL">INDUSTRIAL</option>
            <option value="AMBIENTAL">AMBIENTAL</option>
            </select>
        </div>
        
        <div class="form-group col-md-6">
            <label for="semestre">Semestre</label>
            <select id="semestre" class="form-control" name="semestre">
            <option value="">Seleccionar--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
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
        <label for="inputState">Nombre del monitor:</label>
        <input type="text" class="form-control" id="monitor" name="monitor" aria-describedby="emailHelp" placeholder="Nombre Monitor" value="{{ Auth::user()->name }}" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
    
@endsection