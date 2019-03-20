<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Identifiez-vous</title>
    </head>
    <body>
        {{Form::open(array('url' => '/login')) }}
            {{Form::label('user', 'Nom d'Utilisateur') }}
            {{Form::text('username', Input::old('username')); }}
            {{Form::label('lblpassword','Mot de Passe'); }}
            {{Form::password('password'); }}
            {{Form::submit('Envoyer') }}
            {{Form::button('signUp','Inscription')}}
        {{Form::close() }}
    </body>
</html>
