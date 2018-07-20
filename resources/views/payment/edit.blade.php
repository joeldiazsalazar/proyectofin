@extends('layouts.admin')

@section('contenido')

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Pagos</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Editar Pago</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     				<div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Edicion de Pagos</h5>
                                <div class="f-right">
                                
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">



<form method="POST" action=" {{ route('payments.update', $payment->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

<div class="form-group col-md-4">
<label for="enrollment_id" class="form-control-label">Codigo Matricula</label>

    <input class="form-control" type="text" name="enrollment_id" value="{{ $payment->enrollment_id }}" readonly="">

    {!! $errors->first('enrollment_id','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="nombre" class="form-control-label">Couta</label>

    <input class="form-control" type="text" name="cuota" value="{{ $payment->cuota }}" readonly="">

    {!! $errors->first('nombre','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="nombre" class="form-control-label">Periodo Inicio</label>

	<input class="form-control" type="text" name="periodo_inicio" value="{{ $payment->periodo_inicio }}">

	{!! $errors->first('nombre','<span class=error>:message</span>')!!}


</div>

<div class="form-group col-md-4">
<label for="capacidad" class="form-control-label"> periodo_fin </label>
	
	<input class="form-control" type="text" name="periodo_fin" value="{{ $payment->periodo_fin}}">

	{!! $errors->first('capacidad','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-4">

<label for="vacante" class="form-control-label">
    Pagar</label>
    <input class="form-control" type="text" id="pago" onkeyup="actualizarPago();">

    {!! $errors->first('vacante','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="vacante" class="form-control-label">
	Precio</label>
	<input class="form-control" type="text" name="monto" value="{{ $payment->monto}}" id="precioPago">

	{!! $errors->first('vacante','<span class=error>:message</span>')!!}

</div>

<div class="form-group col-md-4">

<label for="pabellon" class="form-control-label">
    adeuda</label>
    <input class="form-control" type="text" name="adeuda" value="{{ $payment->adeuda }}" readonly="" id="pagodeuda">

    {!! $errors->first('pabellon','<span class=error>:message</span>')!!}

</div>


<div class="form-group col-md-4">

<label for="devolucion" class="form-control-label">
    devolucion</label>
    <input class="form-control" type="text" readonly="" id="devolucion">

</div>

<div class="form-group col-md-4">

<label for="estado" class="form-control-label">
    estado</label>
    <input class="form-control" type="text" name="estado" readonly=""  value="{{ $payment->estado }}" id="pagoestado">

    {!! $errors->first('estado','<span class=error>:message</span>')!!}

</div>
<div class="form-group col-md-12">
	
	<input class="btn btn-primary" type="submit" name="Enviar">

</div>

</form>



</div>

</div>
</div>
</div>



@stop