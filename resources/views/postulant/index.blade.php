@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Postulantes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('postulants.create')}}">Agregar Postulante</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Postulantes</h5>
                                <div class="f-right">

                                	<a href="{{ route('postulants.create')}}" class="btn btn-info">Agregar Nuevo Postulante</a>
                                	
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<div class="container">

       	 {!! Form::open(['route' => 'postulants.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Foto</th>
	<th>Puesto de Trabajo</th>
	<th>Nombre Completo</th>
	<th>Dni</th>
	<th>Curriculum Vitae</th>
<!-- 	<th>Fecha Ingreso</th> -->
	<th>Acciones</th>
	</tr>
</thead>
<tbody class="buscar">
	
	@foreach ($postulant as $postulants)
	<tr>
	<td data-title="ID">{{ $postulants->id }}</td>
    <td data-title="Foto"><img src="{{ Storage::url($postulants->avatar)}}" style="width: 100px;height: 100px;"></td>
	<td data-title="Puesto Trabajo">{{ $postulants->puesto_trabajo}}</td>


		<td data-title="Nombre Completo">{{ $postulants->primer_apellido.' '.$postulants->segundo_apellido.' '.$postulants->nombres}}</td>

		<td data-title="Dni">{{ $postulants->dni}}</td>

		<td data-title="Cv"><a href="{{ Storage::url($postulants->experiencia_laboral)}}">Descargar</a></td>


	<td>
		<a class="btn btn-info btn-xs" href="{{ route('postulants.edit', $postulants->id) }}">Editar</a>
		<form  style="display: inline;" method="POST" action=" {{ route('postulants.destroy', $postulants->id) }}">

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
{{ $postulant->links('vendor.pagination.bootstrap-4') }}
</div>

</div>
</div>
</div>


@stop