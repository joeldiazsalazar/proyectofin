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
                            <h4>Control de Roles</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('roles.create')}}">Agregar Rol</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Roles</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('roles.store')}} ">

    {!! csrf_field() !!}

<div class="form-group">
    <label for="name" class="form-control-label">Nombre</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Rol" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="display_name" class="form-control-label">Nombre a mostrar</label>
    <input type="text" class="form-control" id="display_name" aria-describedby="emailHelp" placeholder="Nombre a mostrar" name="display_name" value="{{ old('display_name')}}">

    {!! $errors->first('display_name','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group">
    <label for="description" class="form-control-label">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Description"  name="description" value="{{ old('description')}}">

        {!! $errors->first('description','<span class=error>:message</span>')!!}
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