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
                                <li class="breadcrumb-item"><a href="">Editar Detalle</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion Detalle</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<form method="POST" action=" {{ route('details.update', $detail->id)}} ">
    {!! method_field('PUT') !!}

    {!! csrf_field() !!}



<div class="form-group col-md-4">

    <label for="programming_id" class="form-control-label">programacion</label>
        <select class="form-control" id="edit-asig" name="programming_id">
           
            <option value="">Seleccione Programacion</option>
                     @foreach ($programming as $getidprog)

                    <option value="{{ $getidprog->id }}"

                    {{ $detail->programming_id == $getidprog->id ? 'selected="selected"' : '' }}>

                    {{ $getidprog->nivel.'-'.$getidprog->grado.'-'.$getidprog->classroom->pabellon  }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('programming_id','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">

    <label for="teacher_id" class="form-control-label">docente</label>
        <select class="form-control" id="edit-asig" name="teacher_id">
           
            <option value="">Seleccione Docente</option>
                     @foreach ($teacher as $getidtech)

                    <option value="{{ $getidtech->id }}"

                    {{ $detail->teacher_id == $getidtech->id ? 'selected="selected"' : '' }}>

                    {{ $getidtech->nombres }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('teacher_id','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">

    <label for="course_id" class="form-control-label">curso</label>
        <select class="form-control" id="edit-asig" name="course_id">
           
            <option value="">Seleccione Curso</option>
                     @foreach ($course as $getidcour)

                    <option value="{{ $getidcour->id }}"

                    {{ $detail->course_id == $getidcour->id ? 'selected="selected"' : '' }}>

                    {{ $getidcour->name }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('course_id','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-4">

   <label for="hour_start" class="form-control-label">Hora de Inicio</label> 
    <input type="text" id="timepicker" name="hour_start" value="{{ $detail->hour_start }}" class="form-control">
</div>

<div class="form-group col-md-4">

   <label for="hour_end" class="form-control-label">Hora de Fin</label> 
    <input type="text" id="timepicker1" name="hour_end" value="{{ $detail->hour_end }}" class="form-control">
</div>



<div class="form-group col-md-4">
<label for="day" class="form-control-label">dia</label>

    <input class="form-control" type="text" name="day" value="{{ $detail->day }}">

    {!! $errors->first('day','<span class=error>:message</span>')!!}


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