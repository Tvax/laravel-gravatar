<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
    </head>
    <body>
        {{Form::open(array('url' => '/signUp')) }}
            {{Form::label('user', 'Nom d'Utilisateur') }}
            {{Form::text('username', Input::old('username')); }}
            {{Form::label('lblpassword','Mot de Passe'); }}
            {{Form::password('password'); }}
            {{Form::submit('Inscription') }}
        {{Form::close() }}
    </body>
</html>
