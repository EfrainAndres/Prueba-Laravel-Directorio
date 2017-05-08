@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido Al Directorio Laravel!!</div>

                <div class="panel-body">
                    <div class="container">
                      <li><a href="{!!URL::to('/directorio')!!}"><i class="fa fa-check fa-fw"></i> Ver Datos!</a>
                      <li><a href="{!!URL::to('directorio/create')!!}"><i class="fa fa-plus fa-fw"></i> Nuevo Directorio!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
