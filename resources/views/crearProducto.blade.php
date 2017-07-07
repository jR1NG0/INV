@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Nuevo Producto</div>
                @include('errores')
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/productos') }}">
                        {{ csrf_field() }} 
                      <div class="form-group">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" >
                            </div>
                     </div>

                     <div class="form-group">
                            <label for="descripcion" class="col-md-4 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="descripcion" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="cantidad" class="col-md-4 control-label">Cantidad</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cantidad" >
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="stock_min" class="col-md-4 control-label">Stock minimo</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stock_min" >
                            </div>
                    </div>

                      <div class="form-group">
                            <label for="area_id" class="col-md-4 control-label">Seleccione Area</label>
                            <div class="col-md-6">
                                <select class="form-control" name="area_id" >
                                   @foreach ($areas as $area)
                                         <option value="{{ $area->area_id }}">{{ $area->nombre }}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            	<a class="btn btn-default btn-md" href='/libros'>Volver</a>
                                <button type="submit" class="btn btn-primary">
                                    Agregar Producto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
