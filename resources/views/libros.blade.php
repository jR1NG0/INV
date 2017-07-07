@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado Libros</div>
                <div class="col-md-10 col-md-offset-1">
                    <br>
                    {{--  se incluye las alertas --}}
                      @include('alerts')
                </div>
                
                <div class="panel-body">
                    <div class="col-md-4 col-md-offset-8">
                        <a class="btn btn-primary btn-block" href='/libros/create'>Agregar Nuevo Libro</a>
                    </div>
                    @foreach($datos as $dato) 
                            <div class="col-md-10 col-md-offset-1">
                                {{-- Se listaran los datos obtenidos como arreglo --}}
                                <h3>{{ $dato['titulo'] }}</h3>
                                <h4>Año: {{ $dato['anno'] }}</h4>
                                <h4>Autor: {{ $dato['autor'] }}</h4>
                                <h4>Genero: {{ $dato['genero'] }}</h4>
                                <br>
                                <div class="col-md-8 col-md-offset-2" style="float: bottom;">
                                    <div class="col-md-6">
                                        <a class="btn btn-success btn-md btn-block" href='/libros/{{ $dato['id'] }}/edit'>Editar</a>{{-- ruta que hace referencia al edit de peliculas --}}
                                    </div>
                                    <div class="col-md-6">
                                        <form method="POST" action="{{ url('/libros/'.$dato['id']) }}">
                                            <input type="hidden" name="_method" value="DELETE"> {{-- Se requiere especificar un input de este tipo para enviar una peticion de tipo DELETE --}}
                                            {{ csrf_field() }}
                                            <input type="submit" class="btn btn-danger btn-block" value="Eliminar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <hr>
                            </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
