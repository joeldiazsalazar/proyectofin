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
                            <h4>Control de Programacion</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('programmings.create')}}">Agregar Programacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Programacion</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('programmings.store')}} ">

    {!! csrf_field() !!}

<div class="form-group">

       <label for="fecha" class="form-control-label">Fecha</label>
    
        <input class="form-control" type="date" value="{{ old('fecha')}}" id="fecha" name="fecha">

        {!! $errors->first('fecha','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="nivel" class="form-control-label">nivel</label>
    <input type="text" class="form-control" id="nivel" aria-describedby="emailHelp" placeholder="nivel" name="nivel" value="{{ old('nivel')}}">

    {!! $errors->first('nivel','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group">
    <label for="grado" class="form-control-label">grado</label>
        <input type="text" class="form-control" id="grado" placeholder="grado"  name="grado" value="{{ old('grado')}}">

        {!! $errors->first('grado','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="turno" class="form-control-label">turno</label>
        <input type="text" class="form-control" id="turno" placeholder="turno"  name="turno" value="{{ old('turno')}}">

        {!! $errors->first('turno','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="estado" class="form-control-label">estado</label>
        <input type="text" class="form-control" id="estado" placeholder="estado"  name="estado" value="{{ old('estado')}}">

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
</div>


<div class="form-group">
    <label for="classroom_id" class="form-control-label">Salon</label>
        
        <select name="classroom_id" id="schearProgrammingClass" style="width: 80px;">

            @foreach($classroom as $classrooms)
            
            <option value="{{ $classrooms->id }}"> {{ $classrooms->nombre }}</option>

            @endforeach
        </select>

        {!! $errors->first('classroom_id','<span class=error>:message</span>')!!}
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