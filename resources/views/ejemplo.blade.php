@extends('layouts.plantilla')

@section('title', 'Página de Inicio')

@section('content')
    <img src="{{ asset('images/fondo.png') }}" alt="Imagen de Inicio" style="width:100%;">
    <h1>Bienvenido a la página de inicio</h1>
    <p>Este es un ejemplo de contenido que se inserta en la plantilla base.</p>
@endsection
