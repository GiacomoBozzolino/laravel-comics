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

    @include('partials.header')

    <main >
        <div >
            <img id="jumbo"  class="flex" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" >
        </div>
        <div class="black">
            <div class="container content">
                <div id="series">CURRENT SERIES</div>
                <div class="flex flex-wrap">
                    <AppComics v-for="(comics, index) in NewComics" :key="index" :recentComics='comics'  /> 
                </div>
                
            </div>
        </div>
        <div class="blue">
            <div class="container blue-content flex">
                <ul class="flex">
                    @foreach($products as $product)
                    <li >
                        <a href="#">
                            <img :src="{{}}" alt="">
                            <div></div>
                        </a>
                    </li>   
                </ul>
            </div>
        </div>
        
    </main>

</body>

</html>