@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


    <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Programacion</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Programacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Programacion</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<form method="POST" action=" {{ route('programmings.update', $programming->id)}} ">
    {!! method_field('PUT') !!}

    {!! csrf_field() !!}
<div class="form-group col-md-4">
<label for="nivel" class="form-control-label">Nivel</label>

    <input class="form-control" type="text" name="nivel" value="{{ $programming->nivel }}">

    {!! $errors->first('nivel','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="grado" class="form-control-label">Grado</label>

    <input class="form-control" type="text" name="grado" value="{{ $programming->grado }}">

    {!! $errors->first('grado','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="turno" class="form-control-label">Turno</label>

    <input class="form-control" type="text" name="turno" value="{{ $programming->turno }}">

    {!! $errors->first('turno','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="estado" class="form-control-label">Estado</label>

    <input class="form-control" type="text" name="estado" value="{{ $programming->estado }}">

    {!! $errors->first('estado','<span class=error>:message</span>')!!}


</div>
<div class="form-group col-md-4">

    <label for="classroom_id" class="form-control-label">AULA</label>
        <select class="form-control" id="edit-asig" name="classroom_id">
           
            <option value="">Seleccione Aula</option>
                     @foreach ($classroom as $getidclass)

                    <option value="{{ $getidclass->id }}"

                    {{ $programming->classroom_id == $getidclass->id ? 'selected="selected"' : '' }}>

                    {{ $getidclass->nombre   }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('classroom_id','<span class=error>:message</span>')!!}
</div>




<div class="form-group col-md-12">
    
    <input class="btn btn-primary" type="submit" name="Enviar">

</div>

</form>



</div>
</div>
</div>
</div>
</div>
</div>


@stop