@extends('layouts.master')
@section('content')


    <div class="row marketing">
        <h3>Modificar Usuario</h3>

        {{ Form::open(['url' => url('usuarios/modificar/'.$usuario->id), 'files' => true]) }}
        <div class="container">

            <div class="form-group">
                {{Form::label('nombres', 'Nombre')}}
                {{Form::text('nombres', $usuario->nombres, ['class'=>'form-control', 'placeholder'=>'nombres del usuario', 'autocomplete'=>'off'])}}
            </div>

            <div class="form-group">
                {{Form::label('apellidos', 'Apellido')}}
                {{Form::text('apellidos', $usuario->apellidos, ['class'=>'form-control', 'placeholder'=>'Apellidos del Usuario', 'autocomplete'=>'off'])}}
            </div>
            <div class="form-group">
                {{Form::label('rfc', 'RFC')}}
                {{Form::text('rfc', Input::old('rfc'), ['class'=>'form-control', 'placeholder'=>'RFC del Usuario', 'autocomplete'=>'off'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'E-mail')}}
                {{Form::text('email', Input::old('email'), ['class'=>'form-control', 'placeholder'=>'E-mail del Usuario', 'autocomplete'=>'off'])}}
            </div>
            <div class="form-group">
                {{Form::label('telefono', 'Telefono')}}
                {{Form::text('telefono', Input::old('telefono'), ['class'=>'form-control', 'placeholder'=>'Telefono del Usuario', 'autocomplete'=>'off'])}}
            </div>
            <div class="form-group">
                {{Form::label('tipo', 'Tipo')}}
                {{Form::select('tipo' , ['Administrador', 'Lector'])}}
            </div>
            <div class="form-group">
                {{Form::label('imagen', 'Carga tu imagen')}}
                {{Form::file('file')}}
            </div>

            {{ Form::submit('Actualizar', ['class'=>'btn btn-success' , 'name' => 'update']) }}
            {{ Form::submit('Eliminar', ['class'=>'btn btn-danger' , 'name' => 'delete']) }}
            {{ Form::reset('Resetear', ['class'=>'btn btn-default']) }}
        </div>

        {{ Form::close() }}
    </div>

@stop