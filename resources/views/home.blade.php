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
                    <div class="position-relative">
                        <div id="series">CURRENT SERIES</div>
                    </div>
                     @foreach($comics as $comic)
                    <div class="col-2">
                   
                        <li class="d-flex pt-5 pb-2">
                            <a href="#">
                                <img class="thumb" src="{{$comic ['thumb'] }}" alt="{{$comic [ "title"] }}">
                                <div class="">
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
            <div class="container blue-content ">
                <ul class="d-flex">
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                            <div> DIGITAL COMICS</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
                            <div> DIGITAL MERCHANDISE</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
                            <div> SUBSCRIPTION</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
                            <div>COMIC SHOP LOCATOR</div>
                        </a>
                    </li>   
                    <li >
                        <a class="d-flex align-items-center" href="#">
                            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
                            <div>DC POWER VISA</div>
                        </a>
                    </li>   
                </ul>
            </div>
         </div>  
    </main>

</body>

</html>