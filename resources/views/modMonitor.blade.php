@extends('theme.principal')
<title>@yield('titulo','Monitor')</title>
@section('contenido')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h1 style="text-align: center; color: green; margin-top: 50px">BIENVENIDO AL CONTROL DE MONITORIAS</h1>
<img src="{{asset("imagenes/principal.png")}}"
    style="width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top: 100px">
@endsection
@include("theme/asidemonitor")
