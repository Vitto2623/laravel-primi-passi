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
            text-align: center;
            width: 100%
        }

        #special{
            display: block;
            color: red
        }
    </style>
</head>
<body>
    
    @include ('home')

    <main>
        <a id="special" href="{{ route('home') }}">Torna alla home</a>
        <img src="{{ URL::asset('/img/formato-immagini-webp_710.jpeg') }}" alt="">
    </main>
</body>
</html>