@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Apoderados</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('attorneys.create')}}">Agregar Apoderado</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Usuarios</h5>
                                <div class="f-right">

                                	<a href="{{ route('attorneys.create')}}" class="btn btn-info">Agregar Nuevo Apoderado</a>
                                	
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<div class="container">

       	 {!! Form::open(['route' => 'attorneys.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombres</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
	<th>Dni</th>
	<th>Estado</th>
	<th>Acciones</th>

	</tr>
</thead>
<tbody class="buscar">
	
	@foreach ($attorney as $attorneys)
	<tr>
	<td data-title="ID">{{ $attorneys->id }}</td>

	<td data-title="Nombres">{{ $attorneys->nombres }}</td>
	<td data-title="ApellidoPaterno">{{ $attorneys->apellidoPaterno}}</td>
	<td data-title="ApellidoMaterno">{{ $attorneys->apellidoMaterno}}</td>
	<td data-title="Dni">{{ $attorneys->dni}}</td>
	<td data-title="Estado">{{ $attorneys->estado}}</td>


{{-- 	<td>

		@foreach($user->student as $students)
		<a href="/students/show/{{ $students->id }}">

			{{ $students->dni }}

		</a>
		
		@endforeach

	</td> --}}

	<td>
		<a class="btn btn-info btn-xs" href="{{ route('attorneys.edit', $attorneys->id) }}">Editar</a>
				<form  id="deleteattorney" style="display: inline;" method="POST" action=" {{ route('attorneys.destroy', $attorneys->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-attorney-btn" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach


	
</tbody>
</table>
</div>
{{ $attorney->links('vendor.pagination.bootstrap-4') }}
</div>

</div>
</div>
</div>


@stop