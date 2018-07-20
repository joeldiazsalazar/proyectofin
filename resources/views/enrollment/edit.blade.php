@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Matricula</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Matricula</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     				<div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Matricula</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<form method="POST" action=" {{ route('enrollments.update', $enrollment->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

<div class="form-group col-md-4">

    <label for="user_id" class="form-control-label">CODIGO ALUMNO</label>
        <select class="form-control" id="edit-asig" name="user_id">
           
            <option value="">Seleccione Alumno</option>
                     @foreach ($user as $id => $username)

                    <option value="{{ $id }}"

                    {{ $enrollment->user_id == $id ? 'selected="selected"' : '' }}>

                    {{ $username }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('user_id','<span class=error>:message</span>')!!}
    

</div>
<div class="form-group col-md-4">

    <label for="student_id" class="form-control-label">ESTUDIANTE</label>
        <select class="form-control" id="edit-asig" name="student_id">
           
            <option value="">Seleccione Estudiante</option>
                     @foreach ($students as $id => $nombres)

                    <option value="{{ $id }}"

                    {{ $enrollment->student_id == $id ? 'selected="selected"' : '' }}>

                    {{ $nombres }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('student_id','<span class=error>:message</span>')!!}
    

</div>


<div class="form-group col-md-4">

    <label for="programming_id" class="form-control-label">PROGRAMACION</label>
        <select class="form-control" id="edit-asig" name="programming_id">
           
            <option value="">Seleccione Programacion</option>
                     @foreach ($programming as $getid)

                    <option value="{{ $getid->id }}"

                    {{ $enrollment->programming_id == $getid->id ? 'selected="selected"' : '' }}>

                    {{ $getid->nivel .'-'. $getid->grado .'-'. $getid->classroom->pabellon   }}
                    </option>
         
            @endforeach
        </select>

        {!! $errors->first('programming_id','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">
<label for="monto" class="form-control-label">Monto</label>

    <input class="form-control" type="text" name="monto" value="{{ $enrollment->monto }}">

    {!! $errors->first('monto','<span class=error>:message</span>')!!}
</label>

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