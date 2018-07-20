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


<table class="table table-hover">
	

	<thead>
		<tr>
			<td>PROGRAMACION</td>
			<td>CURSOS</td>
		</tr>
	</thead>

	<tbody>
		@foreach($detail as $details)

		<tr>
			{{-- <td> {{ $details->id }}</td> --}}
			{{-- <td> {{ $details->teacher_id }}</td> --}}
			<td> {{ $details->programming->id.'-'.$details->programming->classroom->pabellon.' '.$details->programming->nivel }}</td>
			<td> <a href="{{ route('teacher.control', $details->programming->id )}}">{{ $details->course->name }}</a></td>
			{{-- <td> {{ $details->hour_start }}</td> --}}
		</tr>
		@endforeach
	</tbody>
</table>

</div>
</div>
</div>
    </div>
    </div>

@stop