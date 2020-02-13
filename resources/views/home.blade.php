@extends('layouts.app')

@section('contenido')

<h1>Inicio</h1>

<a class="btn btn-primary pull-right" href="{{route('periodos.index')}}">Seleccionar periodo</a>
<a class="btn btn-primary pull-right" href="{{route('contribuyentes.index')}}">Seleccionar contribuyente</a>

@stop