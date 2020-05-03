@extends('modAdministrador')

@section('contenido')
    @include('administrador/editar')
    <h1 style="text-align: center">Monitores ingresados</h1>
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
                    <td>
                        <a href="/editar" class="btn btn-success pull-right" data-toggle="modal" data-target="#editar">EDITAR</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger">ELIMINAR</a>
                    </td>
                </tr>
            @endforeach-
        </tbody>
    </table>
    
@endsection