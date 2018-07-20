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
                            <h4>Control de asistencia</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('assistances.create')}}">Agregar asistencia</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de asistencia</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('assistances.store')}} ">

    {!! csrf_field() !!}

<table class="table-responsive">
    
    <thead class="">
        <tr>
            <td class="">Docente</td>
            <td>DETALLE</td>
        </tr>
    </thead>
    <tbody class="">
        @foreach($detail as $details)
        <tr>
            <td>{{ $details->id }}</td>
            <td>{{ $details->teacher->nombres }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>

</table>




























 
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