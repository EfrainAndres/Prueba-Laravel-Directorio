@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <div class="container">
      @include('alerts.success')

      <table class="table table-bordered" id='tasks'>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>N° de Identificación</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Creación</th>
            <th>Actualización</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
          <tr>
            <td>{{$task->name}}</td>
            <td>{{$task->type_id}}</td>
            <td>{{$task->phone}}</td>
            <td>{{$task->email}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
            <td>
              {{link_to_route('directorio.edit', $title = 'Editar Datos', $parameter = $task, $attributes = ['class' => 'btn btn-primary'])}}
            </td>
            <td>
              @include('directorios.delete')
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {!!$tasks->render()!!}
    </div>
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script
        </script>
        <script src="js/DataTable.js" type="text/javascript">
        </script>
        <script src="js/paginacion" type="text/javascript">
        </script>
        <script src="js/acciones" type="text/javascript">
        </script>
@endsection
@section('scripts')
      {!!Html::script('js/paginacion.js')!!}
@endsection
