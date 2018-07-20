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



<form method="POST" action=" {{ route('roles.update', $roles->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="nombre" class="form-control-label">Nombre Completo</label>
	Nombre

	<input class="form-control" type="text" name="name" value="{{ $roles->name }}">

	{!! $errors->first('name','<span class=error>:message</span>')!!}
</label>

</div>
<div class="form-group col-md-4">
<label for="email" class="form-control-label"> Display Name </label>
	
	<input class="form-control" type="text" name="display_name" value="{{ $roles->display_name}}">

	{!! $errors->first('display_name','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-4">

<label for="email" class="form-control-label">
	Description</label>
	<input class="form-control" type="text" name="description" value="{{ $roles->description}}">

	{!! $errors->first('description','<span class=error>:message</span>')!!}

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