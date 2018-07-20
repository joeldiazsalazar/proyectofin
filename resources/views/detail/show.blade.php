@extends('layout')

@section('contenido')

<h1>Detalle Usuario</h1>


<p>Enviado por {{ $roles->name }} - {{ $roles->display_name }}</p>


@stop