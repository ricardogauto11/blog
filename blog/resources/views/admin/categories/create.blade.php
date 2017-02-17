@extends('admin.template.main')

@section('title', 'Agregar categoría')

@section('content')
  {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
    </div>
  {!! Form::close() !!}
@endsection