<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Articles</title>
    <style>
        div{
            width: 100%;
            text-align: center;
        }
        div a{
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ 'home' }}</h1>
        <h4><a href="{{ route('sezioneArticoli') }}">Vai alla sezione articoli</a></h4>
        <h4><a href="{{ route('photo') }}">Vai alla sezione foto</a></h4>
    </header>

    <main>
        <h1>Articoli:</h1>
        <div>
            <a href="{{ route('home') }}">Torna alla home</a>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quasi accusantium, in dicta earum dignissimos autem expedita excepturi sapiente. Eveniet molestias tempore sequi corrupti at nulla qui animi, blanditiis omnis.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos expedita cupiditate velit unde eaque reiciendis numquam. Nihil recusandae cupiditate unde? Similique deserunt est eos quod odio necessitatibus tenetur non alias!
            Fugiat doloremque tempora repellendus, ullam cupiditate earum facilis neque sequi ducimus. Doloremque non dolorum fugit ratione. Dignissimos, in tempore voluptate omnis optio eius est dolores ipsam. Recusandae alias repellendus culpa.
            Aliquam, temporibus cumque. Quo labore aliquid assumenda veniam quod, fugit accusantium non at id nihil quasi incidunt quis asperiores officiis molestias illum quas consequatur voluptatem tenetur. Fuga maxime quisquam obcaecati.
            Ad molestias atque omnis minima voluptatem laborum blanditiis quaerat incidunt. Harum magni blanditiis iure, provident minus assumenda delectus sed est a accusamus ipsum quis iusto earum? Nostrum consequatur nobis in.
            Perspiciatis repudiandae culpa ratione in cumque enim. Veritatis error, maiores magnam delectus odio, porro facilis vitae ipsam quasi quis sint dolore voluptate voluptatem ea explicabo placeat id ipsum ut quae!
            Autem ducimus provident voluptas harum id possimus cumque assumenda nesciunt laborum adipisci? Nulla obcaecati soluta beatae, ullam, amet mollitia nemo atque dolor illum, enim facilis repudiandae veritatis quidem. Est, facilis.
            A, esse magni, quam doloremque natus obcaecati, eaque cum velit odit sunt ab dolorem sit consequatur adipisci laudantium maiores iste sequi. Quasi, nostrum autem ducimus dolores consectetur nemo dicta nesciunt.
        </p>
    </main>
    
</body>
</html>