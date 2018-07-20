@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Cursos</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('courses.create')}}">Agregar Curso</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Cursos</h5>
                                <div class="f-right">
                                	<a href="{{ route('courses.create')}}" class="btn btn-info">Agregar Nuevo Curso</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

	<div class="container">

       	 {!! Form::open(['route' => 'courses.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


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
	<th>Fecha de creacion</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($course as $courses)
<tr>
	<td data-title="ID">{{ $courses->id }}</td>

	<td data-title="Nombre">{{ $courses->name }}</td>

	<td data-title="Fecha">{{ $courses->created_at}}</td>


	<td>
				<a class="btn btn-info btn-xs" href="{{ route('courses.edit', $courses->id) }}">Editar</a>


				<form  id="delete_course" style="display: inline;" method="POST" action=" {{ route('courses.destroy', $courses->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-course-btn" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach

	
</tbody>
</table>
</div>
{{ $course->links('vendor.pagination.bootstrap-4') }}

</div>

</div>
</div>
</div>




                
@stop

