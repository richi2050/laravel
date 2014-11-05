<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::label('usuario', 'Nombre de usuario') }}
            {{ Form::text('username', Input::old('username')); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::label('lblRememberme', 'Recordar contraseña') }}
            {{ Form::checkbox('rememberme', true) }}
            {{ Form::submit('Enviar') }}
        {{ Form::close() }}
    </body>
</html>