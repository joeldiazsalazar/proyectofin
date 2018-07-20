@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Calificaciones</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('qualifications.create')}}">Agregar Calificacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Calificaciones</h5>
                                <div class="f-right">
                                	<a href="{{ route('qualifications.create')}}" class="btn btn-info">Agregar Nueva Calificacion</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">
<div class="container">

       	 {!! Form::open(['route' => 'qualifications.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
	<th>Alumno</th>
	<th>Codigo</th>
	<th>Trimestre</th>
	<th>Curso</th>
	<th>nota1</th>
	<th>nota2</th>
	<th>nota3</th>
	<th>nota4</th>
	<th>promedio</th>

	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($qualification as $qualifications)
<tr>
	<td data-title="Nombre">{{ $qualifications->user->name }}</td>
	<td data-title="Codigo">{{ $qualifications->user->username }}</td>

	<td data-title="Trimestre">{{ $qualifications->trimester->name }}</td>

	<td data-title="Curso">{{ $qualifications->course->name }}</td>

	<td data-title="Nota 1">{{ $qualifications->nota1}}</td>

	<td data-title="Nota 2">{{ $qualifications->nota2}}</td>
		
	<td data-title="Nota 3">{{ $qualifications->nota3}}</td>
			
	<td data-title="Nota 4">{{ $qualifications->nota4}}</td>
				
	<td data-title="Promedio">{{ $qualifications->promedio}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('qualifications.edit', $qualifications->id) }}">Editar</a>


			
	</td>

</tr>
	@endforeach
</tbody>
</table>
</div>
{{ $qualification->links('vendor.pagination.bootstrap-4') }}

</div>

</div>
</div>
</div>




                
@stop

