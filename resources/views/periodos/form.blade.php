{!!csrf_field()!!}

<div class="container" style="max-width:990px">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(70, 126, 187);">
                      <a class="btn btn-sm btn-warning float-right" href="{{ route('periodos.index') }}">Regresar</a>
                      <h2 style="text-align: center; color: #fff; font-size: 20px"; >Periodos</h2>
                    </div>
                    <div class="card-body" style="background-color: #d1f4ff;">
                        {!! Form::open(['route' => ['periodos.store']]) !!}

                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="nombre">Fecha Inicio</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <input type="text" id="fecha_inicio" name="fecha_inicio" required="required"  class="form-control">
                                
                              </div>
                            </div>                           
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-8 row">
                              <label class="control-label col-lg-4 col-md-4 col-sm-12"
                              for="nombre">Fecha Fin</label>
                              <div class="col-lg-8 col-md-8 col-sm-12">
                                <input type="text" id="fecha_fin" name="fecha_fin" required="required"  class="form-control">
                                
                              </div>
                            </div>                           
                        </div>

                        <div class="form-group text-center">
                                {{ Form::submit('Guardar', ['class'=>'btn btn-lg btn-success']) }}
                                <a class="btn btn-md btn-danger float-right" href="{{ route('periodos.index') }}">Cancelar</a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

</div>
