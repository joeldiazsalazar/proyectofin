@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


    <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Postulantes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Postulantes</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Postulantes</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<form method="POST" action=" {{ route('postulants.update', $postulant->id)}} " enctype="multipart/form-data">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <div class="row">
    <div class="form-group col-md-3">
    <label for="avatar" class="form-control-label">Foto</label>
    <input type="text" class="form-control" id="avatar" aria-describedby="emailHelp" placeholder="" name="avatar" value="{{ $postulant->avatar }}" onkeyup="copyteacher()" onkeypress="return soloLetras(event)">

    {!! $errors->first('avatar','<span class=error>:message</span>')!!}
    </div>
    
    <div class="form-group col-md-3">
     <label for="puesto_trabajo" class="form-control-label">Puesto de Trabajo</label>
     <input type="text" name="puesto_trabajo" value="{{ $postulant->puesto_trabajo }}" class="form-control">

    {!! $errors->first('puesto_trabajo','<span class=error>:message</span>')!!}
    </div>
</div>

<div class="row">

    <div class="form-group col-md-3">
    <label for="dni" class="form-control-label">DNI</label>
    
    <input type="text" name="dni" class="form-control" value="{{ $postulant->dni }}">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>

    <div class="form-group col-md-3">
    <label for="primer_apellido" class="form-control-label">Apellido Paterno</label>
     <input type="text" name="primer_apellido" class="form-control" value="{{ $postulant->primer_apellido }}">

    {!! $errors->first('primer_apellido','<span class=error>:message</span>')!!}
    </div>
 
 
<div class="form-group col-md-3">
    <label for="segundo_apellido" class="form-control-label">Apellido Materno</label>
        <input type="text" name="segundo_apellido" class="form-control" value="{{ $postulant->segundo_apellido}}">

        {!! $errors->first('segundo_apellido','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="nombres" class="form-control-label">Nombre Completo</label>
    <input type="text" name="nombres" class="form-control" value="{{ $postulant->nombres}}">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="fecha_nacimiento" class="form-control-label">Fecha de nacimiento</label>
    
        <input class="form-control" type="date" value="{{ $postulant->fecha_nacimiento }}" id="fecha_nacimiento" name="fecha_nacimiento">

        {!! $errors->first('fecha_nacimiento','<span class=error>:message</span>')!!}
    
</div>


<div class="form-group col-md-3">
    <label for="correo" class="form-control-label">Correo</label>
        <input type="text" name="correo" class="form-control" value="{{ $postulant->correo }}">

        {!! $errors->first('correo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="celular" class="form-control-label">Celular</label>
        <input type="text" name="celular" class="form-control" value="{{ $postulant->celular }}">

        {!! $errors->first('celular','<span class=error>:message</span>')!!}
</div>    
<div class="form-group col-md-3">
    <label for="telefono" class="form-control-label">Telefono</label>
        <input type="text" name="telefono" class="form-control" value="{{ $postulant->telefono }}">

        {!! $errors->first('telefono','<span class=error>:message</span>')!!}
</div>   
 </div>   

<div class="row">
    <div class="form-group col-md-6">
    <label for="direccion" class="form-control-label">Direccion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="direccion" value="{{ $postulant->direccion }}">

        {!! $errors->first('direccion','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="estado_civil" class="form-control-label">Estado civil
    </label>
       <input type="text" name="estado_civil" class="form-control" value="{{ $postulant->estado_civil }}">

        {!! $errors->first('estado_civil','<span class=error>:message</span>')!!}
</div>
    
    <div class="form-group col-md-3">
    <label for="grado_academico" class="form-control-label">Grado academico
    </label>

    <input type="text" name="grado_academico" class="form-control" value="{{ $postulant->grado_academico }}">

        {!! $errors->first('grado_academico','<span class=error>:message</span>')!!}
    </div>




<div class="form-group col-md-3">

    <label for="experiencia_laboral" class="col-md-5 col-form-label form-control-label">Documentos</label>
    <div class="col-md-9">
            <input type="file" name="experiencia_laboral">
        {!! $errors->first('experiencia_laboral','<span class=error>:message</span>')!!}
    </div>

</div>
</div>
<hr>
<div class="row">
    <div class="form-group col-md-3">
    <label for="celular_corporativo" class="form-control-label">Celular Corporativo</label>
    <input type="text" name="celular_corporativo" class="form-control" value="{{ $postulant->celular_corporativo}}">

        {!! $errors->first('celular_corporativo','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="tipo_contrato" class="form-control-label">Tipo de contrato</label>
        <input type="text" class="form-control" name="tipo_contrato" value="{{ $postulant->tipo_contrato}}">

        {!! $errors->first('tipo_contrato','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="duracion" class="form-control-label">Duracion de Contrato</label>
        <input type="text" class="form-control" name="duracion" value="{{ $postulant->duracion }}">

        {!! $errors->first('duracion','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="sueldo_basico" class="form-control-label">Sueldo Basico</label>
        <input type="text" name="sueldo_basico" class="form-control" value="{{ $postulant->sueldo_basico }}">

        {!! $errors->first('sueldo_basico','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="fecha_contrato" class="form-control-label">Fecha de contrato</label>
    
        <input class="form-control" type="date" value="{{ $postulant->fecha_contrato }}" id="fecha_contrato" name="fecha_contrato">

        {!! $errors->first('fecha_contrato','<span class=error>:message</span>')!!}
    
</div>


<div class="form-group col-md-3">
    <label for="correo_corporativo" class="form-control-label">Correo corporativo</label>
        <input type="text" name="correo_corporativo" class="form-control" value="{{ $postulant->correo_corporativo }}">

        {!! $errors->first('correo_corporativo','<span class=error>:message</span>')!!}
</div>

</div>

<div class="col-md-12">
    
    <input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Guardar">
</div>


</form>



</div>

</div>
</div>
</div>



@stop