@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Pagos</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('payments.create')}}">Agregar Pago</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Pagos</h5>
                                <div class="f-right">
                                	<a href="{{ route('payments.create')}}" class="btn btn-info">Agregar Nuevo Pago</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">
<div class="container">

       	 {!! Form::open(['route' => 'payments.index', 'method' => 'GET', 'class' => 'form-inline my-2 my-lg-0', 'role' => 'search']) !!}


       	 {!! Form::text('search', null , ['class' => 'form-control mr-sm-2']) !!}



      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    	 {!! Form::close() !!}
    </div>

<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
	<th>Codigo Matricula</th>
	<th>Cuota</th>
	<th>Periodo Inicio</th>
	<th>Periodo Fin</th>
	<th>Monto</th>
	<th>Estado</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($payment as $payments)
<tr>
	<td data-title="Codigo Matricula">{{ $payments->enrollment_id }}</td>

	<td data-title="Cuota">{{ $payments->cuota }}</td>

	<td data-title="Periodo Inicio">{{ $payments->periodo_inicio }}</td>

	<td data-title="Periodo Fin">{{ $payments->periodo_fin}}</td>

	<td data-title="Monto">{{ $payments->monto}}</td>

	<td data-title="Estado">

		@if($payments->estado  === "cancelado")
		
		<span style="color: blue">{{ $payments->estado}}</span>

		@elseif($payments->estado  === "pendiente")
		<span style="color: red">{{ $payments->estado}}</span>
		@endif	
		</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('payments.edit', $payments->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('payments.destroy', $payments->id) }}">

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
{{ $payment->links('vendor.pagination.bootstrap-4') }}
</div>

</div>
</div>
</div>




                
@stop

