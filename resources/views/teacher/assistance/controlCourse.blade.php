
@extends('layouts.admin')


@section('contenido')

  <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Asistencias</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Asistencias</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">


<form method="POST" action=" {{ route('teachers.sendAssistance')}} ">
	{!! csrf_field() !!}
	<table class="table">
		<h4>Descripcion</h4>
		<thead>
			<tr>
				<td>PROGRAMACION</td>
				<td>CURSO</td>
			</tr>
		</thead>
		<tbody>
			@foreach($dds as $desk)
			<tr>
				<td><input type="checkbox" checked name="programming_id" value="{{ $desk->programming_id }}"> {{ $desk->programming->nivel .'  '. $desk->programming->classroom->nombre .''. $desk->programming->classroom->pabellon }}</td>
				<td>
					<input type="checkbox" checked="" name="course_id" value="{{ $desk->course_id}}">{{ $desk->course->name }}
					
				</td>

				<td><input type="checkbox" checked="" value="{{ $desk->teacher_id }}" name="teacher_id">{{ $desk->teacher->nombres}}</td>
			
			</tr>

			@endforeach
		</tbody>
	</table>
<table class="table table-hover">
	<thead>
		<tr>
			<td>PROGRAMACION DE CURSO</td>

			<tr>
			<td>ALUMNO</td>

			</tr>
		</tr>
	</thead>


	<tbody>


		
		@foreach($dds as $pro)
			
		<tr>



			@foreach($pro->programming->enrollment as $wtf)
			<tr>
			<td> 
				<input type="checkbox" name="user_id[]" checked value="{{ $wtf->user_id}}">{{ $wtf->user->name }}
			</td>
			</tr>
			@endforeach
			
		</tr>

		@endforeach
	</tbody>
</table>

<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>

</div>
</div>
</div>
    </div>
    </div>
@stop