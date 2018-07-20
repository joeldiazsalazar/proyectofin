@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

    @if(session()->has('info'))


    <div class="alert alert-success">{{ session('info')}}</div>

    @else
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
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
                            <div class="card-header"><h5 class="card-header-text">Registro de Pago</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('payments.store')}} ">

    {!! csrf_field() !!}
 <div class="row">
    <div class="col-md-6">
        <label>Seleccione Matricula: </label>
                <select name="enrollment_id" class="form-control">
                    @foreach($enrollment as $enrollments)
                    <option value="{{ $enrollments->id }}">{{ $enrollments->id }}</option>
                    @endforeach
                </select>
    </div>
    <div class="col-md-6">
         <label>Seleccione Trimestre: </label>
                <select name="trimester_id" class="form-control">
                    @foreach($trimester as $trimesters)
                    <option value="{{ $trimesters->id }}">{{ $trimesters->name }}</option>
                    @endforeach
                </select>
    </div>
   </div>             


               

                <hr>

                <div class="form-group">

                  <label for="tablaCuotas">
                    <div class='btn btn-success' id="btnNuevaCuota" onclick="funcNuevoAlineamiento();" >Nueva Cuota</div>
                    

                  </label>                  
                  <table class='table table-bordered table-hover' id="tablaCuotas">
                    <thead>
                    <tr>
                      <th>Cuota</th>
                      <th>Fecha Inicio</th>
                      <th>Fecha Fin</th>
                      <th>Monto</th>
                      <th>Adeuda</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                    </thead>
                    
                  </table>

                </div>  

                <input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

            </form>
            </div>
            </div>
            </div>
    </div>
    </div>
    </div>



@endif


@stop

