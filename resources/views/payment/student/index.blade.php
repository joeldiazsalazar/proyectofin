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
 
                                </div>


                            </div>

<div class="card-block">


<div id="no-more-tables">
	<table class="col-sm-12 table-bordered table-striped table-condensed cf">
<thead>
	<tr>
{{-- 	<th>ID</th> --}}
	<th>Cuota</th>
	<th>Periodo Inicio</th>
	<th>Periodo Fin</th>
	<th>Monto</th>
	<th>Adeuda</th>
	<th>Estado</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($payment as $payments)
	<tr>
{{-- 	<td data-title="ID">{{ $payments->id }}</td> --}}

	<td data-title="Cuota">{{ $payments->cuota }}</td>

	<td data-title="periodo_inicio">{{ $payments->periodo_inicio }}</td>

	<td data-title="periodo_fin">{{ $payments->periodo_fin}}</td>

	<td data-title="monto">{{ $payments->monto}}</td>
	<td data-title="adeuda">

		@if($payments->adeuda === '0')

			<span style="color: blue;">{{ $payments->adeuda}}</span>
		@else

			<span style="color: red;">{{ $payments->adeuda}}</span>

		@endif


	</td>

	<td data-title="estado">{{ $payments->estado}}</td>



</tr>
	@endforeach
</tbody>
</table>
</div>
{{-- {{ $payment->links('vendor.pagination.bootstrap-4') }} --}}
</div>

</div>
</div>
</div>




                
@stop

