@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Trimestre</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('trimesters.create')}}">Agregar Trimestre</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Trimestre</h5>
                                <div class="f-right">
                                	<a href="{{ route('trimesters.create')}}" class="btn btn-info">Agregar Nuevo Trimestre</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">


	<table class="table table-hover">
	
<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>

	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($trimester as $trimesters)
<tr>
	<td>{{ $trimesters->id }}</td>

	<td>{{ $trimesters->name }}</td>


	<td>
				<a class="btn btn-info btn-xs" href="{{ route('trimesters.edit', $trimesters->id) }}">Editar</a>


		{{-- 		<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('trimesters.destroy', $trimesters->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-edition-btn" type="submit">Eliminar</button>

				</form> --}}
	</td>

</tr>
	@endforeach
</tbody>
</table>


</div>

</div>
</div>
</div>




                
@stop

