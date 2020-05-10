@extends('modAdministrador')

@section('contenido')
<h1 style="text-align: center">PERDIDAS REPORTADAS</h1>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Monitor</th>
            <th scope="col">Sede</th>
            <th scope="col">Sala</th>
            <th scope="col">Equipo</th>
            <th scope="col">Objeto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach (verPerdida() as $row)
        <tr>
            <th scope="row">{{$row->id }}</th>
            <td>{{$row->monitor }}</td>
            <td>{{$row->sede }}</td>
            <td>{{$row->sala }}</td>
            <td>{{$row->equipo }}</td>
            <td>{{$row->objeto }}</td>
            <td>{{$row->descripcion }}</td>
            <td>{{$row->estado }}</td>
            <td>
                <a href="/Editar-Perdida/{{$row->id }}" class="btn btn-success pull-right">EDITAR</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection