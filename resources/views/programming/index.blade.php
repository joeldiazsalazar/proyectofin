@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Aulas</h5>
                                <div class="f-right">
                                	<a href="{{ route('programmings.create')}}" class="btn btn-info">Agregar Nueva Programacion</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">
<div class="container">

       	 {!! Form::open(['route' => 'programmings.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
	<th>ID</th>
	<th>Fecha</th>
	<th>Nivel</th>
	<th>Grado</th>
	<th>Turno</th>
	<th>Salon</th>
	<th>Estado</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($programming as $programmings)
<tr>
	<td data-title="ID">{{ $programmings->id }}</td>

	<td data-title="Fecha">{{ $programmings->fecha }}</td>

	<td data-title="Nivel">{{ $programmings->nivel }}</td>

	<td data-title="Grado">{{ $programmings->grado}}</td>

	<td data-title="Turno">{{ $programmings->turno}}</td>

	<td data-title="Nombre">{{ $programmings->classroom->nombre}}</td>

	<td data-title="Estado">{{ $programmings->estado}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('programmings.edit', $programmings->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('programmings.destroy', $programmings->id) }}">

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
{{ $programming->links('vendor.pagination.bootstrap-4') }}

</div>

</div>
</div>
</div>




                
@stop

