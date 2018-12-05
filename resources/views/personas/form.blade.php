<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Cedula : </strong>
      {!! Form::text('cedula', null, ['placeholder'=>'Cedula','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Nombre : </strong>
      {!! Form::text('nombre', null, ['placeholder'=>'Nombre','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Apellidos : </strong>
      {!! Form::text('apellidos', null, ['placeholder'=>'Apellidos','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Telefono : </strong>
      {!! Form::text('telefono', null, ['placeholder'=>'Telefono','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('personas.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>