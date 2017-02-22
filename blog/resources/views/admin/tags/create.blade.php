@extends('admin.template.main')

@section('title', 'Agregar tag')

@section('content')
  {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ej: PHP, Laravel, programación', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
    </div>
  {!! Form::close() !!}
@endsection