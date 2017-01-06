@extends('layouts.master')

@section('content')

    <div class="jumbotron">
        <h1>Usuarios</h1>
        <p class="lead">Se pueden Ver los usuarios en esta seccion<p>
    </div>

    <div class="row marketing">
        @foreach($usuarios as $usuario)
            @foreach($perfiles as $perfil)
                <div class="panel panel-primary">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>rfc</th>
                                <th>email</th>
                                <th>telefono</th>
                                <th>Tipo</th>
                                <th>accion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th><img src="{{asset('/img/' . $usuario->imagen)}}" width="150" height="150" style="border-radius: 50%;"></th>
                                <th>{{ $usuario->nombres }}</th>
                                <th>{{ $usuario->apellidos }}</th>
                                <th>{{ $perfil->rfc }}</th>
                                <th>{{ $perfil->email }}</th>
                                <th>{{ $perfil->telefono }}</th>
                                @if ($usuario->tipo == 0)
                                    <th>Administrador</th>
                                @else
                                <th>Lector</th>
                                @endif
                                <th>
                                    <a href="{{ url('/usuarios/modificar/'. $usuario->id) }}" class="btn btn-warning">
                                        editar
                                    </a>
                                    <a href="{{ url('/usuarios/modificar/'. $usuario->id) }}" class="btn btn-danger">
                                        eliminar
                                    </a>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
@stop

