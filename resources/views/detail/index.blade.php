@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control detalle Programacion</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('programmings.create')}}">Agregar detalle Programacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Programacion - Detalle</h5>
                                <div class="f-right">
                                	<a href="{{ route('details.create')}}" class="btn btn-info">Agregar detalle Programacion</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

	<div class="container">

       	 {!! Form::open(['route' => 'details.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>
<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
	<th>ID</th>
	<th>Programacion</th>
	<th>Docente</th>
	<th>Curso</th>
	<th>Hora Inicio</th>
	<th>Hora Fin</th>
	<th>Dia</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($detail as $details)
<tr>
	<td data-title="ID">{{ $details->id }}</td>

	<td data-title="Programacion">{{ $details->programming->nivel.'-'.$details->programming->grado.'-'.$details->programming->classroom->pabellon  }}</td>

	<td data-title="Docente">{{ $details->teacher->nombres }}</td>

	<td data-title="Curso">{{ $details->course->name}}</td>

	<td data-title="Hora Inicio">{{ $details->hour_start}}</td>

	<td data-title="Hora Fin">{{ $details->hour_end}}</td>

	<td data-title="Dia">{{ $details->day}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('details.edit', $details->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('details.destroy', $details->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-edition-btn" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach
</tbody>
</table>
</div>
{{ $detail->links('vendor.pagination.bootstrap-4') }}

</div>

</div>
</div>
</div>




                
@stop

