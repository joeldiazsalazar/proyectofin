@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


    <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Apoderados</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Apoderados</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Apoderados</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">



<form method="POST" action=" {{ route('attorneys.update', $attorney->id)}} ">
    {!! method_field('PUT') !!}

    {!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="nombres" class="form-control-label">Nombre Completo</label>

    <input class="form-control" type="text" name="nombres" value="{{ $attorney->nombres }}">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</label>

</div>
<div class="form-group col-md-4">
<label for="apellidoPaterno" class="form-control-label"> Apellido Paterno </label>
    
    <input class="form-control" type="text" name="apellidoPaterno" value="{{ $attorney->apellidoPaterno}}">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-4">

<label for="apellidoMaterno" class="form-control-label">
    Apellido Materno</label>
    <input class="form-control" type="text" name="apellidoMaterno" value="{{ $attorney->apellidoMaterno}}">

    {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="dni" class="form-control-label">
    DNI</label>
    <input class="form-control" type="text" name="dni" value="{{ $attorney->dni}}">

    {!! $errors->first('dni','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="sexo" class="form-control-label">
    Sexo</label>
    <input class="form-control" type="text" name="sexo" value="{{ $attorney->sexo}}">

    {!! $errors->first('sexo','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="est_civil" class="form-control-label">
    Estado civil</label>
   

<select name="est_civil" class="form-control">
    
    @foreach($att as $aa)

    <option value="{{ $aa->est_civil }}"> {{ $aa->est_civil }} </option>

   @endforeach
</select>

    {!! $errors->first('est_civil','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-6">

    <label for="direccion" class="form-control-label">
    Direccion</label>
    <input class="form-control" type="text" name="direccion" value="{{ $attorney->direccion}}">

    {!! $errors->first('direccion','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-6">

<label for="celular" class="form-control-label">
    Celular</label>
    <input class="form-control" type="text" name="celular" value="{{ $attorney->celular}}">

    {!! $errors->first('celular','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-6">

<label for="estado" class="form-control-label">
    Estado</label>
    <input class="form-control" type="text" name="estado" value="{{ $attorney->estado}}">

    {!! $errors->first('estado','<span class=error>:message</span>')!!}

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