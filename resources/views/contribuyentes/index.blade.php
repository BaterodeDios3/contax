@extends('layouts.app')

@section('contenido')

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <a class="btn btn-sm btn-outline-primary float-right" href="{{route('contribuyentes.create')}}">Crear contribuyente</a>
                <h2 style="text-align: center; color: #1b4b72">Contribuyentes</h2>
</div>

<div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            {!! Form::open(array('url'=>'contribuyentes','method'=>'GET','autocomplete'=>'off')) !!}
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar" value="{{$query}}" name="search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                    </span>
                                </div>
                            </div>
                            <!-- cerramos el formulario -->
                            {!! Form::close() !!}

<div class="table-responsive">
<table class="table table-bordered table-head-bg-info">
<thead>
<tr style="text-align: center">
<th>ID</th>
<th>Nombre</th>
<th>NIT</th>
<th>Regimen</th>
</tr>
</thead>
<tbody>
@foreach ($contribuyentes as $contribuyente)
<tr>
<td>{{$contribuyente->id}}</td>
<td>{{$contribuyente->nombre}}</td>
<td>{{$contribuyente->nit}}</td>
<td>{{$contribuyente->nomreg}}</td>
</tr>
@endforeach
</tbody>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop