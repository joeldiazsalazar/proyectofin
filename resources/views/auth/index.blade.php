@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Usuarios</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('users.create')}}">Agregar Usuario</a>
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
                                	<a href="{{ route('users.create')}}" class="btn btn-info">Agregar Usuario</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>

                                </div>
                                <div class="modal fade modal-flex" id="input-type-Modal" tabindex="-1" role="dialog">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<h5 class="modal-title">Code Explanation for Border Checkbox</h5>
												</div>
												<!-- end of modal-header -->
												<div class="modal-body">
									                      


												</div>
												<!-- end of modal-body -->
											</div>
											<!-- end of modal-content -->
										</div>
										<!-- end of modal-dialog -->
									</div>

                            </div>

<div class="card-block">

	<div class="container">

       	 {!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>
<div class="container">

	
<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Rol</th>
	<th>Asignacion</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($users as $user)
	<tr>
	<td data-title="ID">{{ $user->id }}</td>

	<td data-title="Nombre">{{ $user->name}}</td>



	<td data-title="Rol">{{ $user->role->display_name}}</td>
	
	<td data-title="Asignacion">

		@foreach($user->student as $students)

		{{-- <a href="/students/show/{{ $students->id }}"> --}}

			{{ $students->email }}

		{{-- </a> --}}
		
		@endforeach

		@foreach($user->attorney as $attorneys)
		{{-- <a href="/attorneys/show/{{ $attorneys->id }}"> --}}

			{{ $attorneys->nombres }}

		{{-- </a> --}}
		@endforeach
	
		@foreach($user->teacher as $teachers)
		{{-- <a href="/teachers/show/{{ $teachers->id }}"> --}}

			{{ $teachers->correo }}
{{-- 
		</a> --}}
		@endforeach

		
	
	</td>

	<td>
		<a class="btn btn-info btn-xs" href="{{ route('users.edit', $user->id) }}">Editar</a>
				<form style="display: inline;" method="POST" action=" {{ route('users.destroy', $user->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach

	


</tbody>
</table>
</div>

{{ $users->links('vendor.pagination.bootstrap-4') }}

</div>
</div>

</div>
</div>
</div>


@stop