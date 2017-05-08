@extends('layouts.app')
@section('content')

  <div class="container">

  @include('alerts.errors')

    {!!Form::model($task, ['route' => ['directorio.update',$task], 'method' => 'PUT'])!!}

        @include('directorios.form')

        {!!Form::submit('Modificar Tarea',['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}


  </div>

@endsection
