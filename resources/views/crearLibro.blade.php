@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Nuevo Libro</div>
                @include('errores')
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/libros') }}">
                        {{ csrf_field() }} 
                      <div class="form-group">
                            <label for="titulo" class="col-md-4 control-label">Titulo</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="titulo" >
                            </div>
                     </div>

                     <div class="form-group">
                            <label for="anno" class="col-md-4 control-label">Año</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="anno" >
                            </div>
                        </div>

                      <div class="form-group">
                            <label for="autor_id" class="col-md-4 control-label">Seleccione Autor</label>
                            <div class="col-md-6">
                                <select class="form-control" name="autor_id" >
                                   @foreach ($autores as $autor)
                                         <option value="{{ $autor->autor_id }}">{{ $autor->nombre }}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="id_genero" class="col-md-4 control-label">Genero</label>
                            <div class="col-md-6">
                                <select class="form-control" name="id_genero" > 
                                   @foreach ($generos as $genero)
                                         <option value="{{ $genero->id_genero }}">{{ $genero->descripcion }}</option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            	<a class="btn btn-default btn-md" href='/libros'>Volver</a>
                                <button type="submit" class="btn btn-primary">
                                    Crear Libro
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
