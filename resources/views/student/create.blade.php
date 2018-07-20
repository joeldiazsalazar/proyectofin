@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>General Elements</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item"><a href="general-elements-bootstrap.html">General Elements</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Agregar Alumno</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('students.store')}} ">

    {!! csrf_field() !!}
<div class="row">
<div class="form-group col-md-4">
    <label for="nombres" class="form-control-label">Nombre Completo</label>
    <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp" placeholder="" name="nombres" value="{{ old('nombres')}}" onkeyup="copyuser()" onkeypress="return soloLetras(event)">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">
    <label for="apellidoPaterno" class="form-control-label">apellidoPaterno</label>
    <input type="text" class="form-control" id="apellidoPaterno" aria-describedby="emailHelp" placeholder="" name="apellidoPaterno" value="{{ old('apellidoPaterno')}}" onkeypress="return soloLetras(event)">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-4">
    <label for="apellidoMaterno" class="form-control-label">apellidoMaterno</label>
        <input type="text" class="form-control" id="apellidoMaterno" placeholder=""  name="apellidoMaterno" value="{{ old('apellidoMaterno')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}
</div>
 
<div class="form-group col-md-4">
    <label for="email" class="form-control-label">Email</label>
        <input type="text" class="form-control" id="email" placeholder=""  name="email" value="{{ old('email')}}" onkeypress="return validarEmail(event)">

        {!! $errors->first('email','<span class=error>:message</span>')!!}
</div>
 
<div class="form-group col-md-4">
    <label for="dni" class="form-control-label">dni</label>
        <input type="text" class="form-control" id="dni" placeholder=""  name="dni" value="{{ old('dni')}}" maxlength="10" onkeyup="Card(event, this)">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">
    <label for="sexo" class="form-control-label">sexo</label>
        
        <br>
        <label class="radio-inline"><input type="radio" name="sexo" value="activo">Masculino</label>
        <label class="radio-inline"><input type="radio" name="sexo" value="inactivo">Femenino</label>      

        {!! $errors->first('sexo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-6">
    <label for="fecha_nacimiento" class="form-control-label">fecha_nacimiento</label>
    
        <input class="form-control" type="date" value="{{ old('fecha_nacimiento')}}" id="fecha_nacimiento" name="fecha_nacimiento">

        {!! $errors->first('fecha_nacimiento','<span class=error>:message</span>')!!}
    
</div>

<div class="form-group col-md-3">
    <label for="direccion" class="form-control-label">direccion</label>
        <input type="text" class="form-control" id="direccion" placeholder=""  name="direccion" value="{{ old('direccion')}}">

        {!! $errors->first('direccion','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="distrito" class="form-control-label">distrito</label>
        <input type="text" class="form-control" id="distrito" placeholder=""  name="distrito" value="{{ old('distrito')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('distrito','<span class=error>:message</span>')!!}
</div>
</div>
<div class="row">
<div class="form-group col-md-4">
    <label for="departamento" class="form-control-label">departamento</label>
        <input type="text" class="form-control" id="departamento" placeholder=""  name="departamento" value="{{ old('departamento')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('departamento','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">
    
<label for="estado" class="form-control-label">estado</label>

<br>
<label class="radio-inline"><input type="radio" name="estado" value="activo">Activo</label>
<label class="radio-inline"><input type="radio" name="estado" value="inactivo">Inactivo</label>

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-4">
    <label for="attorney_id" class="form-control-label">Apoderado</label>
        <select class="form-control" id="mibuscador" name="attorney_id"">
           @foreach ($attorneys as $attorney)
            <option  value="{{ $attorney->id }}">  {{ $attorney->nombres }} </option>
            @endforeach
        </select>

        {!! $errors->first('attorney_id','<span class=error>:message</span>')!!}
</div>
</div>



<div class="row">
<div class="form-group col-md-3">
    <label for="name" class="form-control-label">Nombre Usuario</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="username" class="form-control-label">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="Enter Username" name="username" value="{{ old('username')}}">

    {!! $errors->first('username','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-3">
    <label for="password" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password"  name="password" value="{{ old('password')}}">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
 

 
<div class="form-group col-md-3">
    <label for="exampleSelect1" class="form-control-label">Seleccione Rol</label>
        <select class="form-control" id="mibuscador" name="role_id"">
           @foreach ($roles as $rol)
            <option  value="{{ $rol->id }}">  {{ $rol->display_name }} </option>
            @endforeach
        </select>

        {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</div>

<div class="col-md-12">
	
	<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">
</div>
</div>

</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>
{{-- <p><label for="name">
    Nombre

    <input class="form-control" type="text" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="{{ old('email')}}">

    {!! $errors->first('email','<span class=error>:message</span>')!!}
</label></p>



<p><label for="password">
    password
    <input class="form-control" type="password" name="password" value="{{ old('password')}}">

    {!! $errors->first('password','<span class=error>:message</span>')!!}
</label></p>


<p><label for="role">
    role
    <input class="form-control" type="text" name="role_id" value="{{ old('role_id')}}">

    {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</label></p> --}}




@stop