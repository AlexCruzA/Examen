@extends('vehiculos.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Simple laravel CRUD with resource controller</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('vehiculos.create') }}">Create New Vehiculo</a>
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
      <th>Marca</th>
      <th>Modelo</th>
      <th>Kilometraje</th>
      <th>Notas</th>
      <th>Foto</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($vehiculos as $vehiculo)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $vehiculo->marca }}</td>
        <td>{{ $vehiculo->modelo }}</td>
        <td>{{ $vehiculo->kilometraje }}</td>
        <td>{{ $vehiculo->notas }}</td>
        <td>{{ $vehiculo->foto }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('vehiculos.show', $vehiculo->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('vehiculos.edit', $vehiculo->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['vehiculos.destroy', $vehiculo->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $vehiculos->links() !!}
@endsection