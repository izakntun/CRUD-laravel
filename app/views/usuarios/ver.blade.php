@extends('layouts.master')
@section('content')

    {{ HTML::link('usuarios' , 'Volver'); }}
    <h1>Usuario {{ $usuario->id }}</h1>
    {{ $usuario->nombres .' '.
    $usuario->apellidos .' '.
    $usuario->imagen .' '.
    $usuario->tipo }}

@stop