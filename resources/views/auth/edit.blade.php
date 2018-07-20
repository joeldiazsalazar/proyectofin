@extends('layouts.admin')

@section('contenido')


@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif
<div class="container-fluid">


  <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Usuarios</h4>
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
                            <div class="card-header">

                              @if (auth()->check())

                              @if (auth()->user()->hasRoles(['admin']))
                              <h5 class="card-header-text">Asignacion de Usuarios</h5>

                              @elseif(auth()->user()->hasRoles(['alumno']))
                              <h5 class="card-header-text">Cambiar contraseña</h5>

                              @elseif(auth()->user()->hasRoles(['docente']))
                              <h5 class="card-header-text">Cambiar contraseña</h5>

                              @elseif(auth()->user()->hasRoles(['apoderado']))
                              <h5 class="card-header-text">Cambiar contraseña</h5>

                              @endif

                              @endif


                         </div>

<div class="card-block">


<form method="POST" action=" {{ route('users.update', $user->id)}} " enctype="multipart/form-data">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

@if (auth()->check())

@if (auth()->user()->hasRoles(['admin']))

  <div class="form-group col-md-4">
    
    <img src="{{ Storage::url($user->avatar)}}" style="width: 150px; height: 150px;">
     <input type="file" name="avatar">
 
  </div>

  <div class="form-group col-md-4">
    
    <p><label for="nombre">
               Nombre

        <input class="form-control" type="text" name="name" value="{{ $user->name }}">

  {!! $errors->first('name','<span class=error>:message</span>')!!}
  </label></p>

  </div>
	<div class="form-group col-md-4">

<p><label for="username">
	Username
	<input class="form-control" type="text" name="username" value="{{ $user->username}}">

	{!! $errors->first('username','<span class=error>:message</span>')!!}
</label>
</p>
</div>
@unless($user->id)
<div class="form-group col-md-6">
    <label for="password" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-6">
    <label for="password_confirmation" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation" >

        {!! $errors->first('password_confirmation','<span class=error>:message</span>')!!}
</div>
@endunless

@endif
@endif

@if (auth()->check())

@if (auth()->user()->hasRoles(['alumno']))
<div class="form-group col-md-6">
    <label for="password" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-6">
    <label for="password_confirmation" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation" >

        {!! $errors->first('password_confirmation','<span class=error>:message</span>')!!}
</div>
@elseif(auth()->user()->hasRoles(['docente']))
<div class="form-group col-md-6">
    <label for="password" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-6">
    <label for="password_confirmation" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation" >

        {!! $errors->first('password_confirmation','<span class=error>:message</span>')!!}
</div>

@elseif(auth()->user()->hasRoles(['apoderado']))
<div class="form-group col-md-6">
    <label for="password" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        {!! $errors->first('password','<span class=error>:message</span>')!!}
</div>
<div class="form-group col-md-6">
    <label for="password_confirmation" class="form-control-label">Password</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="password_confirmation" name="password_confirmation" >

        {!! $errors->first('password_confirmation','<span class=error>:message</span>')!!}
</div>

@endif
@endif

@if (auth()->check())

@if (auth()->user()->hasRoles(['admin']))

<div class="container">
<div class="row">
  

<ul class="nav nav-tabs col-md-12  tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Asignacion Alumnos<a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Asignacion Apoderado</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Asignacion Docentes</a>
    </li>
 
</ul>

<div class="tab-content tabs">
    <div class="tab-pane active" id="home1" role="tabpanel">
       

 <div class="form-group">
    <label for="student" class="form-control-label"></label>
        <select class="form-control" id="edit-asig" name="student">
           
          <option value="">Seleccione Alumno</option>
           @foreach ($students as $id =>$email)

            <option value="{{ $id }}"
            {{ $user->student->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
            {{ $email}}
            </option>
         
            @endforeach
        </select>

        {!! $errors->first('student','<span class=error>:message</span>')!!}
</div>     

    </div>
    <div class="tab-pane" id="profile1" role="tabpanel">
       <div class="form-group">
    <label for="attorney" class="form-control-label"></label>
        <select class="form-control" id="edit-asig" name="attorney">
           
          <option value="">Seleccione Apoderado</option>
           @foreach ($attorneys as $id =>$dni)

            <option value="{{ $id }}"
            {{ $user->attorney->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
            {{ $dni}}
            </option>
         
            @endforeach
        </select>

        {!! $errors->first('attorney','<span class=error>:message</span>')!!}
</div>
    </div>
    <div class="tab-pane" id="messages1" role="tabpanel">
       
             <div class="form-group">
    <label for="teacher" class="form-control-label"></label>
        <select class="form-control" id="edit-asig" name="teacher">
           
          <option value="">Seleccione Apoderado</option>
           @foreach ($teachers as $id =>$correo)

            <option value="{{ $id }}"
            {{ $user->teacher->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
            {{ $correo}}
            </option>
         
            @endforeach
        </select>

        {!! $errors->first('teacher','<span class=error>:message</span>')!!}
</div>

    </div>
  
</div>
</div>
</div>

@endif
@endif

<input class="btn btn-primary" type="submit" name="Enviar">

</form>

</div>

</div>
</div>
</div>
@stop