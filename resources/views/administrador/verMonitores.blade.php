@extends('modAdministrador')

@section('contenido')
<h1 style="text-align: center">INFORMACIÓN MONITORES REGISTRADOS</h1>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
@if (session('status2'))
<div class="alert alert-danger" role="alert">
    {{ session('status2') }}
</div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Programa</th>
            <th scope="col">Semestre</th>
            <th scope="col">Sala</th>
            <th scope="col">Horario</th>
            <th scope="col">Administrador</th>
            <th scope="col">Fecha Creacion</th>
            <th scope="col">Fecha Actualizacion</th>
        </tr>
    </thead>
    <tbody>
        @foreach (verMonitor() as $row)
        <tr>
            <th scope="row">{{$row->id }}</th>
            <td>{{$row->nombre }}</td>
            <td>{{$row->codigo }}</td>
            <td>{{$row->programa }}</td>
            <td>{{$row->semestre }}</td>
            <td>{{$row->sala }}</td>
            <td>{{$row->horario }}</td>
            <td>{{$row->administrador }}</td>
            <td>{{$row->created_at }}</td>
            <td>{{$row->updated_at }}</td>
            <td>
                <a href="/Editar-Monitor/{{$row->id }}" class="btn btn-success pull-right">EDITAR</a>
            </td>
            <td>
                <form action="/Eliminar-Monitor/{{$row->id }}" method="post">
                    {{ csrf_field()}}
                    {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                </form>
            </td>
        </tr>
        @endforeach-
    </tbody>
</table>

@endsection