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
            <div class="container ">
                <div class="row"> 
                    <div>
                        <div id="series">CURRENT SERIES</div>
                    </div>
                     @foreach($comics as $comic)
                    <div class="col-2">
                   
                    <li class="d-flex align-item-">
                        <a href="#">
                            <img :src="{{$comic ['thumb'] }}" alt="">
                            <div class="text-center">
                            {{$comic [ "title"] }}
                            </div>
                        </a>
                    </li> 
                     
                    </div>
                    @endforeach 

                </div>

               
                
                
            </div>
        </div>
        <div class="blue">
            <div class="container blue-content d-flex">
                <ul class="d-flex">
                    
                </ul>
            </div>
        </div>
        
    </main>

</body>

</html>