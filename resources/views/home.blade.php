<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

    
<body>

    <header class="container d-flex">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-end align-items-center bg-primary">
                    <div class="px-2 px-1">
                    DC POWER VISA
                    </div>
                    <div class="px-2 px-1 ">
                        ADDITIONAL DC SITE
                    </div>
                </div>
            </div>
            <div class=" col-12 d-flex flex-wrap align-items-center justify-content-between py-3"> 
                <div >
                    <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="">
                </div>
                <div>
                    <ul class="d-flex flex-wrap">
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
                        <li >
                        <input type="search" name="search" id="search" placeholder="search">
                        </li>
                    </ul>
                </div>
            </div>
       </div>
    </header>


    <main >
        
    </main>

</body>

</html>