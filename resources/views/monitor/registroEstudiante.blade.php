@extends('modMonitor')

@section('contenido')
<form class="container" method="POST" action="{{url('control')}}" style="width: 50%;">
    {{ csrf_field()}}
    <h1 style="text-align: center">REGISTRO DE ESTUDIANTES</h1>
    <div class="form-row">
        
        <div class="form-group col-md-6">
            <label for="inputState">FECHA-HORA:</label>
            <input type="text" class="form-control" id="fecha" name="fecha" value="{{ date('Y-m-d H:i:s')}}"
                readonly required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Codigo del estudiante:</label>
            <input type="number" class="form-control" id="codigo" name="codigo" aria-describedby="Ingrese Codigo"
                placeholder="Codigo" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Nombre del estudiante:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Ingrese Nombre"
                placeholder="Nombre" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Apellido del estudiante:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="Ingrese Apellido"
                placeholder="Apellido" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Programa:</label>
            <select name="programa" id="programa" class="form-control" required>
                <option value="">Seleccionar</option>
                @foreach (nombrePrograma() as $nombrePrograma)
                <option value="{{$nombrePrograma->nombre}}">{{$nombrePrograma->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Semestre:</label>
            <select name="semestre" id="semestre" class="form-control" required>
                <option value="">Seleccionar</option>
                @foreach (semestre() as $semestre)
                <option value="{{$semestre->semestre}}">{{$semestre->semestre}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="form-group">
        <label for="inputState">Equipo:</label>
        <select name="equipo" id="equipo" class="form-control" required>
            <option value="">Seleccionar</option>
            @foreach (equipo() as $equipo)
            <option value="{{$equipo->equipo}}">{{$equipo->equipo}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="inputState">Nombre del monitor:</label>
        <input type="text" class="form-control" id="monitor" name="monitor" aria-describedby="emailHelp"
            placeholder="Nombre Monitor" value="{{ Auth::user()->name }}" readonly required>
    </div>
    <div style="text-align:center;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>

@endsection