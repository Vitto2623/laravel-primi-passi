<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Photo</title>
    <style>
        main{
            text-align: center
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a{
            margin: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h4><a href="{{ route('sezioneArticoli') }}">Vai alla sezione articoli</a></h4>
        <a href="{{ route('home') }}">Torna alla home</a>
    </header>

    <main>
        <img src="{{ URL::asset('/img/formato-immagini-webp_710.jpeg') }}" alt="">
    </main>
</body>
</html>