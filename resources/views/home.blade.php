@extends('plantilla')
@section('title', 'Principal')
@section('contenido')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
<h1>REGISTRO EXITOSO</h1>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Salir') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <div class="setion">
        <img class="imagen" src="imagenes/hi.png">
        <h2>BIENVENIDO</h2>
        <h3>{{auth()->user()->name}}</h3>
        <div style="padding:20px;">
            <span style="display:block;font-weight: 400;font-size: 15px;line-height: 28px;font-family: Cabin,sans-serif;color: #2d6b9c;">-Haga clic en el botón e inicie sesión con su nuevo usuario</span>
        </div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Iniciar sesión') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
