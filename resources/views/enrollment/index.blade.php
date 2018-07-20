@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Matricula</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('enrollments.create')}}">Agregar Matricula</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Matricula</h5>
                                <div class="f-right">
                                	<a href="{{ route('enrollments.create')}}" class="btn btn-info">Agregar Nueva Matricula</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<div class="container">

       	 {!! Form::open(['route' => 'enrollments.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>
<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Codigo</th>
	<th>Monto</th>
	<th>Estado</th>
	<th>Nivel</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($enrollment as $enrollments)
<tr>
	<td data-title="ID">{{ $enrollments->id }}</td>

	<td data-title="Nombres">
		{{ $enrollments->student->nombres }}</td>

	<td data-title="Codigo">

		<a href="{{ route('enrollments.show', $enrollments->id)}}"> Ver ficha de matricula {{ $enrollments->user->username }}</a>

	</td>

	<td data-title="Monto">{{ $enrollments->monto}}</td>

	<td data-title="Estado">{{ $enrollments->estado}}</td>

	<td data-title="Nivel">{{ $enrollments->programming->nivel}}</td>

	<td >
				<a class="btn btn-info btn-xs" href="{{ route('enrollments.edit', $enrollments->id) }}">Editar</a>


				<form  class="deleteenrollment" style="display: inline;" method="POST" action=" {{ route('enrollments.destroy', $enrollments->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs " type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach
</tbody>
</table>
</div>
{{ $enrollment->links('vendor.pagination.bootstrap-4') }}

</div>

</div>
</div>
</div>




                
@stop

