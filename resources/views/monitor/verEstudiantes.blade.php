@extends('modMonitor')

@section('contenido')
    <h1 style="text-align: center">Estudiantes ingresados</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Programa</th>
            <th scope="col">Semestre</th>
            <th scope="col">Equipo</th>
            <th scope="col">Monitor</th>
        </tr>
        </thead>
        <tbody>
            @foreach (verEstudiate() as $row)
                <tr>
                    <th scope="row">{{$row->id }}</th>
                    <td>{{$row->codigo }}</td>
                    <td>{{$row->nombre }}</td>
                    <td>{{$row->apellido }}</td>
                    <td>{{$row->programa }}</td>
                    <td>{{$row->semestre }}</td>
                    <td>{{$row->equipo }}</td>
                    <td>{{$row->monitor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection