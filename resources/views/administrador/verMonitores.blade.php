@extends('modAdministrador')

@section('contenido')
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
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection