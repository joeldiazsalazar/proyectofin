@extends('layouts.errors')


@section('contenido')


<div class="error-404">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <!-- Row start -->
        <div class="row">
            <div class="text-uppercase col-xs-12">
                <h1>404</h1>
                <h5>Page Not Found</h5>
                <p>oops! page not found</p>
                <a href="{{ route('cpanel')}}" class="btn btn-error btn-lg waves-effect">back to home page</a>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Container-fluid ends -->
</div>

@stop