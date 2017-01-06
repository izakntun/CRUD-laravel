<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Usuarios</title>
    {{ HTML::style('css/bootstrap-3.3.7-dist/css/bootstrap.css') }}
</head>
<body>

    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li>{{ HTML::link('/usuarios' , 'Inicio') }}</li>
                <li>{{ HTML::link('usuarios/nuevo' , 'Agregar Nuevo Usuario') }}</li>
                <li></li>
            </ul>
            <h3 class="text-muted">Lista de usuarios</h3>
        </div>
            @yield('content')
        <div class="footer">
            <!--<p>&copy; Prueba </p>-->
        </div
    </div>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    {{ HTML::script('css/bootstrap-3.3.7-dist/js/bootstrap.js') }}
</body>
</html>