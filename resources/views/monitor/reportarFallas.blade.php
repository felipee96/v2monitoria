@extends('modMonitor')

@section('contenido')
<form class="container" method="POST" action="{{url('fallas')}}" style="width: 50%;">
    {{ csrf_field()}}
    <h1 style="text-align: center">REPORTAR FALLAS EN EQUIPO</h1>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">FECHA-HORA:</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ date('Y-m-d H:i:s')}}"
                readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Monitor</label>
            <input type="text" class="form-control" id="monitor" name="monitor" value="{{ Auth::user()->name }}"
                readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputState">Sede:</label>
            <select name="id_sede" id="id_sede" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (sede() as $sede)
                <option value="{{$sede->id}}">{{$sede->sede}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Sala:</label>
            <select name="sala" id="sala" class="form-control">
                <option value="">Seleccionar</option>
                @foreach (sala() as $sala)
                <option value="{{$sala->sala}}">{{$sala->sala}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputState">Equipo:</label>
        <select name="equipo" id="equipo" class="form-control">
            <option value="">Seleccionar</option>
            @foreach (equipo() as $equipo)
            <option value="{{$equipo->equipo}}">{{$equipo->equipo}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="inputAddress">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion">
    </div>
    <div style="text-align:center;">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
@endsection