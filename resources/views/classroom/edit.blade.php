@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Roles</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Rol</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     				<div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Roles</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">



<form method="POST" action=" {{ route('classrooms.update', $classroom->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="nombre" class="form-control-label">Nombre Completo</label>
	Nombre

	<input class="form-control" type="text" name="nombre" value="{{ $classroom->nombre }}">

	{!! $errors->first('nombre','<span class=error>:message</span>')!!}
</label>

</div>

<div class="form-group col-md-4">
<label for="capacidad" class="form-control-label"> capacidad </label>
	
	<input class="form-control" type="text" name="capacidad" value="{{ $classroom->capacidad}}">

	{!! $errors->first('capacidad','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-4">

<label for="vacante" class="form-control-label">
	vacante</label>
	<input class="form-control" type="text" name="vacante" value="{{ $classroom->vacante}}">

	{!! $errors->first('vacante','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="pabellon" class="form-control-label">
    pabellon</label>
    <input class="form-control" type="text" name="pabellon" value="{{ $classroom->pabellon}}">

    {!! $errors->first('pabellon','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-12">
	
	<input class="btn btn-primary" type="submit" name="Enviar">

</div>

</form>



</div>

</div>
</div>
</div>



@stop