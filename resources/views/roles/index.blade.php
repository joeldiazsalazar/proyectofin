@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Roles</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('roles.create')}}">Agregar Rol</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Roles</h5>
                                <div class="f-right">
                                	<a href="{{ route('roles.create')}}" class="btn btn-info">Agregar Nuevo Rol</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Display_name</th>
	<th>Description</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($roles as $rol)
<tr>
	<td data-title="ID">{{ $rol->id }}</td>

	<td data-title="Nombre">{{ $rol->name }}</td>

	<td data-title="Display">{{ $rol->display_name }}</td>

	<td data-title="Descripcion">{{ $rol->description}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('roles.edit', $rol->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('roles.destroy', $rol->id) }}">

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
{{ $roles->links('vendor.pagination.bootstrap-4') }}


</div>

</div>
</div>
</div>




                
@stop

