@extends('modAdministrador')

@section('contenido')
    <h1 style="text-align: center">Fallas en los equipos</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Monitor</th>
            <th scope="col">Sede</th>
            <th scope="col">Sala</th>
            <th scope="col">Equipo</th>
            <th scope="col">Descripcion</th>
        </tr>
        </thead>
        <tbody>
            @foreach (verFalla() as $row)
                <tr>
                    <th scope="row">{{$row->id }}</th>
                    <td>{{$row->monitor }}</td>
                    <td>{{$row->sede }}</td>
                    <td>{{$row->sala }}</td>
                    <td>{{$row->equipo }}</td>
                    <td>{{$row->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection