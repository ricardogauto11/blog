@extends('admin.template.main')

@section('title', 'Editar usuario ' . $user->name)

@section('content')
  {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Correo electrónico') !!}
      {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('type', 'Tipo') !!}
      {!! Form::select('type', ['' => 'Elija una opción', 'member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
@endsection