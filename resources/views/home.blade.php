<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

    
<body>



    <header class="container d-flex">
        <div>
            <img src="" alt="">
        </div>
        <div>
            <ul class="d-flex">
                <li >
                   <a href="">CHARACTERS</a>
                </li>
                <li >
                   <a href="{{ route ('homepage') }}">COMICS</a>
                </li>
                <li >
                   <a href="">MOVIES</a>
                </li>
                <li >
                   <a href="">TV</a>
                </li>
                <li >
                   <a href="">GAMES</a>
                </li>
                <li >
                   <a href="">COLLECTIBLES</a>
                </li>
                <li >
                   <a href="">VIDEOS</a>
                </li>
                <li >
                   <a href="">FANS</a>
                </li>
                <li >
                   <a href="">NEWS</a>
                </li>
                <li >
                   <a href="">SHOP</a>
                </li>

            </ul>
        </div>
    </header>


    <main >
        
    </main>

</body>

</html>