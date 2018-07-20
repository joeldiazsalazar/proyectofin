@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
            <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Postulantes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('postulants.create')}}">Agregar Postulante</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Postulantes</h5>



                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('postulants.store')}} " enctype="multipart/form-data">

    {!! csrf_field() !!}
    <div class="row">
    <div class="form-group col-md-5">
    <label for="avatar" class="form-control-label">Foto</label>
   <input type="file" name="avatar">

    {!! $errors->first('avatar','<span class=error>:message</span>')!!}
    </div>
    
    <div class="form-group col-md-3">
     <label for="puesto_trabajo" class="form-control-label">Puesto de Trabajo</label>
    <select name="puesto_trabajo" class="form-control" id="selectorPost">
        <option value="">Seleccione</option>
        <option value="Comercial">Comercial</option>
        <option value="Administracion y Finanzas">Administracion y Finanzas</option>
        <option value="Calidad">Calidad</option>
        <option value="Seguridad">Seguridad</option>
        <option value="Acreditador">Acreditador</option>

        <option value="Licenciada de Enfermería">Licenciada de Enfermería</option>
        <option value="Técnicas de enfermería">Técnicas de enfermería</option>
        <option value="Licenciada en Psicología">Licenciada en Psicología</option>
        <option value="Asistente en Psicología">Asistente en Psicología</option>
        <option value="Prevencionista de riesgo">Prevencionista de riesgo</option>

        <option value="TM en Terapia física y rehabilitación">TM en Terapia física y rehabilitación</option>
        <option value="Asistente en terapia física y rehabilitación">Asistente en terapia física y rehabilitación</option>
        <option value="SSOMA">SSOMA</option>
        <option value="Medico Evaluador">Medico Evaluador</option>
        <option value="Medico Auditor">Medico Auditor</option>

        <option value="Recepcionista">Recepcionista</option>
        <option value="Asistente de formación y capacitación">Asistente de formación y capacitación</option>
        <option value="Técnico Odontólogo">Técnico Odontólogo</option>
        <option value="Secretaria">Secretaria</option>
        <option value="Medico Ocupacional">Medico Ocupacional</option>

        <option value="Ejecutivo Comercial">Ejecutivo Comercial</option>

    </select>

    {!! $errors->first('puesto_trabajo','<span class=error>:message</span>')!!}
    </div>
</div>

<div class="row">

    <div class="form-group col-md-3">
    <label for="dni" class="form-control-label">DNI</label>
        <input type="text" class="form-control" id="cardnumber" placeholder=""  name="dni" value="{{ old('dni')}}">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>

    <div class="form-group col-md-3">
    <label for="primer_apellido" class="form-control-label">Apellido Paterno</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="primer_apellido" value="{{ old('primer_apellido')}}" onkeypress="return soloLetras(event)">

    {!! $errors->first('primer_apellido','<span class=error>:message</span>')!!}
    </div>
 
 
<div class="form-group col-md-3">
    <label for="segundo_apellido" class="form-control-label">Apellido Materno</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="segundo_apellido" value="{{ old('segundo_apellido')}}" onkeypress="return soloLetras(event)">

        {!! $errors->first('segundo_apellido','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="nombres" class="form-control-label">Nombre Completo</label>
    <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp" placeholder="" name="nombres" value="{{ old('nombres')}}"  onkeypress="return soloLetras(event)">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="fecha_nacimiento" class="form-control-label">Fecha de nacimiento</label>
    
        <input class="form-control" type="date" value="{{ old('fecha_nacimiento')}}" id="fecha_nacimiento" name="fecha_nacimiento">

        {!! $errors->first('fecha_nacimiento','<span class=error>:message</span>')!!}
    
</div>


<div class="form-group col-md-3">
    <label for="correo" class="form-control-label">Correo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="correo" value="{{ old('correo')}}" onkeypress="return validarEmail(event)">

        {!! $errors->first('correo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="celular" class="form-control-label">Celular</label>
        <input type="text" class="form-control" id="numberCel" placeholder=""  name="celular" value="{{ old('celular')}}" >

        {!! $errors->first('celular','<span class=error>:message</span>')!!}
</div>    
<div class="form-group col-md-3">
    <label for="telefono" class="form-control-label">Telefono</label>
        <input type="text" class="form-control" id="numberHome" placeholder=""  name="telefono" value="{{ old('telefono')}}">

        {!! $errors->first('telefono','<span class=error>:message</span>')!!}
</div>   
 </div>   

<div class="row">
    <div class="form-group col-md-6">
    <label for="direccion" class="form-control-label">Direccion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="direccion" value="{{ old('direccion')}}">

        {!! $errors->first('direccion','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="estado_civil" class="form-control-label">Estado civil
    </label>
       
    <select class="form-control" id="exampleSelect1" name="estado_civil">
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Soltero">Soltero</option>
            <option value="Divorciado">Divorciado</option>
    </select>

        {!! $errors->first('estado_civil','<span class=error>:message</span>')!!}
</div>
    
    <div class="form-group col-md-3">
    <label for="grado_academico" class="form-control-label">Grado academico
    </label>
       
    <select class="form-control" id="exampleSelect1" name="grado_academico">
        <option value="">Seleccione</option>
        <option value="Licenciado">Licenciado</option>
        <option value="Bachiller">Bachiller</option>
        <option value="Post grado">Post grado</option>
        <option value="Titulado">Titulado</option>
        <option value="Doctorado">Doctorado</option>
            <option value="Tecnico Incompleto">Tecnico Incompleto</option>
            <option value="Tecnico">Tecnico</option>
            <option value="Estudiante Universitario">Estudiante Universitario</option>
            <option value="Universitario">Universitario</option>
    </select>

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
        <input type="text" class="form-control" id="numberCorp" placeholder=""  name="celular_corporativo" value="{{ old('celular_corporativo')}}" >

        {!! $errors->first('celular_corporativo','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="tipo_contrato" class="form-control-label">Tipo de contrato</label>
        <input type="text" class="form-control" name="tipo_contrato" value="{{ old('tipo_contrato')}}">

        {!! $errors->first('tipo_contrato','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="duracion" class="form-control-label">Duracion de Contrato</label>
        <input type="text" class="form-control" name="duracion" value="{{ old('duracion')}}">

        {!! $errors->first('duracion','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="sueldo_basico" class="form-control-label">Sueldo Basico</label>
        <input type="text" class="form-control" id="numberSueld" placeholder=""  name="sueldo_basico" value="{{ old('sueldo_basico')}}">

        {!! $errors->first('sueldo_basico','<span class=error>:message</span>')!!}
</div> 

<div class="form-group col-md-3">
    <label for="fecha_contrato" class="form-control-label">Fecha de contrato</label>
    
        <input class="form-control" type="date" value="{{ old('fecha_contrato')}}" id="fecha_contrato" name="fecha_contrato">

        {!! $errors->first('fecha_contrato','<span class=error>:message</span>')!!}
    
</div>


<div class="form-group col-md-3">
    <label for="correo_corporativo" class="form-control-label">Correo corporativo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="correo_corporativo" value="{{ old('correo_corporativo')}}" onkeypress="return validarEmail(event)">

        {!! $errors->first('correo_corporativo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="estado" class="form-control-label">estado</label>
    
<br>
<label class="radio-inline"><input type="radio" name="estado" value="activo">Activo</label>
<label class="radio-inline"><input type="radio" name="estado" value="inactivo">Inactivo</label>

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
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
    </div>
    </div>

@stop