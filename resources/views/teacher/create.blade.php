@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
            <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Docentes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('teachers.create')}}">Agregar Docente</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Docentes</h5>



                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('teachers.store')}} " enctype="multipart/form-data">

    {!! csrf_field() !!}
<div class="row">
<div class="form-group col-md-3">
    <label for="nombres" class="form-control-label">Nombre Completo</label>
    <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp" placeholder="" name="nombres" value="{{ old('nombres')}}" onkeyup="copyteacher()" onkeypress="return soloLetras(event)">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="apellidoPaterno" class="form-control-label">apellidoPaterno</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="apellidoPaterno" value="{{ old('apellidoPaterno')}}" onkeypress="return soloLetras(event)">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-3">
    <label for="apellidoMaterno" class="form-control-label">apellidoMaterno</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="apellidoMaterno" value="{{ old('apellidoMaterno')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}
</div>
 

 <div class="form-group col-md-3">
    <label for="dni" class="form-control-label">dni</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="dni" value="{{ old('dni')}}" maxlength="10" onkeyup="Card(event, this)">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
   <label for="sexo" class="form-control-label">sexo</label>
        
        <br>
        <label class="radio-inline"><input type="radio" name="sexo" value="activo">Masculino</label>
        <label class="radio-inline"><input type="radio" name="sexo" value="inactivo">Femenino</label>      

        {!! $errors->first('sexo','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="correo" class="form-control-label">correo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="correo" value="{{ old('correo')}}" onkeypress="return validarEmail(event)">

        {!! $errors->first('correo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
        
<label for="estado" class="form-control-label">estado</label>

<br>
<label class="radio-inline"><input type="radio" name="estado" value="activo">Activo</label>
<label class="radio-inline"><input type="radio" name="estado" value="inactivo">Inactivo</label>

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="profesion" class="form-control-label">profesion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="profesion" value="{{ old('profesion')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('profesion','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-5">

<label for="documentos" class="col-md-5 col-form-label form-control-label">Documentos</label>
    <div class="col-md-9">
        
            <input type="file" name="documentos">
           
       
        {!! $errors->first('documentos','<span class=error>:message</span>')!!}
    </div>

</div>
</div>

<div class="row">
<div class="form-group col-md-3">
    <label for="name" class="form-control-label">Nombre Usuario</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="username" class="form-control-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="username" value="{{ old('username')}}">

    {!! $errors->first('username','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="password" value="{{ old('password')}}">

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

@stop