@extends('modAdministrador')

@section('contenido')
    <h1 style="text-align: center">USUARIOS REGISTRADOS</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Cargo</th>
            <th scope="col">Fecha de creación</th>
        </tr>
        </thead>
        <tbody>
            @foreach (verUsuarios() as $row)
                <tr>
                    <th scope="row">{{$row->id }}</th>
                    <td>{{$row->name }}</td>
                    <td>{{$row->email }}</td>
                    <td>{{$row->cargo }}</td>
                    <td>{{$row->created_at }}</td>
                </tr>
            @endforeach-
        </tbody>
    </table>
    
@endsection