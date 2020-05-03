@extends('modAdministrador')

@section('contenido')
<form class="container" method="POST" action="{{url('registro')}}" style="width: 50%;">
    {{ csrf_field()}}
    <h1>REGISTRO DE MONITORES</h1>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Nombre monitor:</label>
        <select name="nombreMonitor" id="nombreMonitor" class="form-control">
            <option value="">--Seleccionar</option>
            @foreach (nombreMonitor() as $nombreMonitor)
              <option value="{{$nombreMonitor->id}}">{{$nombreMonitor->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Codigo del estudiante:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="Ingrese Codigo" placeholder="Codigo">
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
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="sala">Sala en la que va a laborar</label>
            <select id="sala" class="form-control" name="sala">
            <option value="">Seleccionar--</option>
            <option value=">C4-11">C4-11</option>
            <option value="B2-208">B2-208</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="horario">Horario en el que va a laborar</label>
            <select id="horario" class="form-control" name="horario">
            <option value="">Seleccionar--</option>
            <option value="8:00 - 12:00">8:00 - 12:00</option>
            <option value="14:00 - 18:00">14:00 - 18:00</option>
            <option value="18:00 - 22:00">18:00 - 22:00</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputState">Nombre del administrador:</label>
        <input type="text" class="form-control" id="nombreAdmin" name="nombreAdmin" aria-describedby="emailHelp" placeholder=Nombre Administrador" value="{{ Auth::user()->name }}" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
    
@endsection