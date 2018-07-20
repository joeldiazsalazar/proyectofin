@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


    <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Docentes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Docentes</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Docentes</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">



<form method="POST" action=" {{ route('teachers.update', $teacher->id)}} " enctype="multipart/form-data">
    {!! method_field('PUT') !!}

{{--     <a href="{{ Storage::url($teacher->documentos)}}">documento</a> --}}

    {!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="nombres" class="form-control-label">Nombre Completo</label>

    <input class="form-control" type="text" name="nombres" value="{{ $teacher->nombres }}">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</label>

</div>
<div class="form-group col-md-4">
<label for="apellidoPaterno" class="form-control-label"> Apellido Paterno </label>
    
    <input class="form-control" type="text" name="apellidoPaterno" value="{{ $teacher->apellidoPaterno}}">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-4">

<label for="apellidoMaterno" class="form-control-label">
    Apellido Materno</label>
    <input class="form-control" type="text" name="apellidoMaterno" value="{{ $teacher->apellidoMaterno}}">

    {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="dni" class="form-control-label">
    DNI</label>
    <input class="form-control" type="text" name="dni" value="{{ $teacher->dni}}">

    {!! $errors->first('dni','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="sexo" class="form-control-label">
    Sexo</label>
    <input class="form-control" type="text" name="sexo" value="{{ $teacher->sexo}}">

    {!! $errors->first('sexo','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="correo" class="form-control-label">
    correo</label>
    <input class="form-control" type="text" name="correo" value="{{ $teacher->correo}}">

    {!! $errors->first('correo','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="estado" class="form-control-label">
    estado</label>
    <input class="form-control" type="text" name="estado" value="{{ $teacher->estado}}">

    {!! $errors->first('estado','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="profesion" class="form-control-label">
    profesion</label>
    <input class="form-control" type="text" name="profesion" value="{{ $teacher->profesion}}">

    {!! $errors->first('profesion','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-5">

    <label for="documentos" class="col-md-5 col-form-label form-control-label">Documentos</label>
    <div class="col-md-9">
        
            <input type="file" name="documentos">
           
       
        {!! $errors->first('documentos','<span class=error>:message</span>')!!}
    </div>

    

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