<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Marca : </strong>
      {!! Form::text('marca', null, ['placeholder'=>'Marca','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Modelo : </strong>
      {!! Form::text('modelo', null, ['placeholder'=>'Modelo','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Kilometraje : </strong>
      {!! Form::text('kilometraje', null, ['placeholder'=>'Kilometraje','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Notas : </strong>
      {!! Form::text('notas', null, ['placeholder'=>'Notas','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('personas.index') }}">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div>