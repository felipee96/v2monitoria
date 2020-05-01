@extends('plantilla')
@section('title', 'Principal')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/principal.css') }}">
<h1>CONTROL DE MONITORIAS</h1>
<div class="contenedorPrueba">
    <div class="setion">
      <img class="sala" src="imagenes/administrador.png">
      <h2>ADMINISTRADOR</h2>
      <p>Sección de ingreso para administrador</p>
      <a href="/login"><button class="buttonReservar">Ingresar</button></a>
    </div>
    <div class="setion">
      <img class="sala" src="imagenes/monitor.png">
      <h2>MONITOR</h2>
      <p>Sección de ingreso para monitores</p>
      <a href="/login"><button class="buttonReservar">Ingresar</button></a>
    </div>
  </div>
@endsection
