@extends('layouts.app')

@section('contenido')

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                 <a class="btn btn-sm btn-outline-primary float-right" href="{{route('contribuyentes.index')}}">Regresar</a>
                 <h2 style="text-align: center; color: #1b4b72">Crear contribuyente</h2>
              </div>

                    <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-md-12">
                            
              <div class="row justify-content-center">
                 <h3 style="text-align: center; color: #1b4b72">Datos personales</h3>
              </div>        
                            <div class="row">
                                <div class="form-group col-lg-12 row">
                                    <label class="control-label col-lg-3 col-md-4 col-sm-12" for="nombre">Nombres</label>
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <input type="text" id="nombre" name="nombre" required="required" class="form-control" value="{{old('nombre')}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 row">
                                    <label class="control-label col-lg-3 col-md-4 col-sm-12" for="apellido">Apellidos</label>
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <input type="text" id="apellido" name="apellido" required="required" class="form-control" value="{{old('apellido')}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 row">
                                    <label class="control-label col-lg-3 col-md-4 col-sm-12" for="dpi">DPI</label>
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <input type="text" id="dpi" name="dpi" class="form-control" value="{{old('dpi')}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 row">
                                    <label class="control-label col-lg-3 col-md-4 col-sm-12" for="nit">NIT</label>
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <input type="text" id="nit" name="nit" required="required" class="form-control" value="{{old('nit')}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 row">
                                    <label class="control-label col-lg-3 col-md-4 col-sm-12" for="direccion">Dirección</label>
                                    <div class="col-lg-9 col-md-8 col-sm-12">
                                        <input type="text" id="direccion" name="direccion" class="form-control" value="{{old('direccion')}}" >
                                    </div>
                                </div>
                            </div>

                          <div class="row">
                            <div class="form-group col-lg-10 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="vivienda">Régimen</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <select  name="comboBox" onChange="abre()" required="required"
                                class="form-control">
                                    <option value="">--Seleccione un régimen--</option>
                                    @foreach ($regimenes as $regimen)
                                    <option value="{{$regimen->id}}">{{$regimen->nombre}}</option>
                                    @endforeach
                                </select>
                              </div>
                              
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

