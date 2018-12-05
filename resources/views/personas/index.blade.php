@extends('personas.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Simple laravel CRUD with resource controller</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('personas.create') }}">Create New Persona</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Cedula</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($personas as $persona)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $persona->cedula }}</td>
        <td>{{ $persona->nombre }}</td>
        <td>{{ $persona->apellidos }}</td>
        <td>{{ $persona->telefono }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('personas.show', $persona->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('personas.edit', $persona->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['personas.destroy', $persona->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $personas->links() !!}
@endsection