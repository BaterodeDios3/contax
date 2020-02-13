@extends('base')

@section('contenido')

<h1>Periodos</h1>
<a class="btn btn-primary pull-right" href="{{route('regimen.create')}}">Crear régimen</a>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
</tr>
</thead>
<tbody>
@foreach ($regimenes as $regimen)
<tr>
<td>{{$regimen->id}}</td>
<td>{{$regimen->nombre}}</td>
</tr>
@endforeach
</tbody>

</table>

@stop