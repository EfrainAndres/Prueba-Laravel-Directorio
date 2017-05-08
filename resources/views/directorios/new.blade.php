@extends('layouts.app')
@section('content')

  <div class="container">

  @include('alerts.errors')

    {!!Form::open(['route' => 'directorio.store', 'method' => 'POST'])!!}

        @include('directorios.form')
        <br>
        <br>
        {!!Form::submit('Crear',['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
  </div>

@endsection
