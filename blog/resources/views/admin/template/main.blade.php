<!DOCTYPE html>
<html lang="es">
  <head>
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      @include('admin.template.partials.nav')

      <div class="panel panel-default">
        <div class="panel-heading">@yield('title')</div>
        <div class="panel-body">
          <section>
            @include('flash::message')
            @include('admin.template.partials.errors')
            @yield('content')
          </section>
        </div>
      </div>

    </div>
    <script src="{{ asset('plugins/jquery/jquery-3.1.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

  </body>
</html>