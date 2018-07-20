@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Alumnos</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Alumno</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     				<div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Alumnos</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">



<form method="POST" action=" {{ route('students.update', $students->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="nombre" class="form-control-label">Nombre Completo</label>

	<input class="form-control" type="text" name="nombres" value="{{ $students->nombres }}">

	{!! $errors->first('nombres','<span class=error>:message</span>')!!}
</label>

</div>
<div class="form-group col-md-4">
<label for="apellidoPaterno" class="form-control-label"> Apellido Paterno </label>
	
	<input class="form-control" type="text" name="apellidoPaterno" value="{{ $students->apellidoPaterno}}">

	{!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-4">

<label for="apellidoMaterno" class="form-control-label">
	Apellido Materno</label>
	<input class="form-control" type="text" name="apellidoMaterno" value="{{ $students->apellidoMaterno}}">

	{!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="email" class="form-control-label">
    Email</label>
    <input class="form-control" type="text" name="email" value="{{ $students->email}}">

    {!! $errors->first('email','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="dni" class="form-control-label">
    DNI</label>
    <input class="form-control" type="text" name="dni" value="{{ $students->dni}}">

    {!! $errors->first('dni','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="sexo" class="form-control-label">
    Sexo</label>
    <input class="form-control" type="text" name="sexo" value="{{ $students->sexo}}">

    {!! $errors->first('sexo','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="fecha_nacimiento" class="form-control-label">
    Fecha de Nacimiento</label>
   <input class="form-control" type="date" value="{{ $students->fecha_nacimiento }}" id="example-date-input" name="fecha_nacimiento">

    {!! $errors->first('fecha_nacimiento','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="direccion" class="form-control-label">
    Direccion</label>
    <input class="form-control" type="text" name="direccion" value="{{ $students->direccion}}">

    {!! $errors->first('direccion','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="distrito" class="form-control-label">
    Distrito</label>
    <input class="form-control" type="text" name="sexo" value="{{ $students->distrito}}">

    {!! $errors->first('distrito','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="sexo" class="form-control-label">
    Departamento</label>
    <input class="form-control" type="text" name="departamento" value="{{ $students->departamento}}">

    {!! $errors->first('departamento','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">
    
<label for="estado" class="form-control-label">estado</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="estado" value="{{ $students->estado}}">

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-4">
    <label for="attorney_id" class="form-control-label">Apoderado</label>
        <select class="form-control" id="edit-asig" name="attorney_id">
           
            <option value="">Seleccione Estudiante</option>
                     @foreach ($attorney as $getida)

                    <option value="{{ $getida->id }}"

                    {{ $students->attorney_id == $getida->id ? 'selected="selected"' : '' }}>

                    {{ $getida->nombres }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('attorney_id','<span class=error>:message</span>')!!}
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