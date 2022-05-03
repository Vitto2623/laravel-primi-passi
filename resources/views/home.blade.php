<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>{{ 'home' }}</h1>
        <h4><a href="{{ route('sezioneArticoli') }}">Vai alla sezione articoli</a></h4>
        <h4><a href="{{ route('photo') }}">Vai alla sezione foto</a></h4>
    </header>










</body>
</html>