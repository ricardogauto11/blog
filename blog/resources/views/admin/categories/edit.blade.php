@extends('admin.template.main')

@section('title', 'Editar categoría ' . $category->name)

@section('content')
  {!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>
  {!! Form::close() !!}
@endsection