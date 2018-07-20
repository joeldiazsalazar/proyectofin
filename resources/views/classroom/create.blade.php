@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

    @if(session()->has('info'))


    <div class="alert alert-success">{{ session('info')}}</div>

    @else
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Aulas</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('classrooms.create')}}">Agregar Aula</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Aula</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('classrooms.store')}} ">

    {!! csrf_field() !!}

<div class="form-group">
    <label for="nombre" class="form-control-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Enter nombre" name="nombre" value="{{ old('nombre')}}">

    {!! $errors->first('nombre','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="capacidad" class="form-control-label">Capacidad</label>
    <input type="text" class="form-control" id="capacidad" aria-describedby="emailHelp" placeholder="capacidad" name="capacidad" value="{{ old('capacidad')}}" onkeyup="copiar()">

    {!! $errors->first('capacidad','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group">
    <label for="vacante" class="form-control-label">Vacante</label>
        <input type="text" class="form-control"  id="vacante" placeholder="vacante"  name="vacante" value="{{ old('vacante')}}" >

        {!! $errors->first('vacante','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="pabellon" class="form-control-label">pabellon</label>
        <input type="text" class="form-control" id="pabellon" placeholder="Description"  name="pabellon" value="{{ old('pabellon')}}">

        {!! $errors->first('pabellon','<span class=error>:message</span>')!!}
</div>

 
<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>



@endif


@stop