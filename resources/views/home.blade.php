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
{{-- HEADER --}}
    @include('partials.header')
    {{-- FINE HEADER --}}
    {{-- MAIN --}}
    <main >
        <div >
            <img id="jumbo"  class="flex" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" >
        </div>
        {{-- SEZIONE FUMETTI --}}
        <div class="black">
            <div class="container ">
                <div class="row pb-3"> 
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
                    <div class="col-12 d-flex justify-content-center">
                        <button >LOAD MORE</button>
                    </div>
                </div>   
            </div>
        </div>
        {{-- FINE SEZIONE FUMETTI --}}
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
    <footer>
        <div class="container ">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex justify-content-between ">
                        <div class="upper-footer">
                            <div>
                                <h3>DC COMICS</h3>
                                <ul>
                                    @foreach($list as $item)
                                    <li >
                                        <a href={{$item['link']}}>{{$item['label']}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                
                                
                                    <h3>SHOP</h3>
                                <ul>
                                    <li>
                                        <a href="#">Shop DC</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop DC Collectibles</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3>DC </h3>
                                <ul>
                                    @foreach($list_2 as $item)
                                    <li >
                                        <a href={{$item['link']}}>{{$item['label']}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div>
                                <h3>SITES</h3>
                                <ul>
                                    @foreach($list_3 as $item)
                                    <li >
                                        <a href={{$item['link']}}>{{$item['label']}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> 
                    </div>
                     <div class="p-3">
                        All site Content TM  &copy; 2020 DC Entertiment, unless otherwise <a href="">noted here</a>. All right reserve. <br>
                        <a href="">Cookies Settings</a>
                    </div>
                </div>
               <div class="col-6">
                   <div class="logo">
                      {{-- <img src="{{ Vite::asset('resources/images/dc-logo-bg.png')}}" alt="">  --}}
                   </div>
               </div>
                
            </div>
            
        </div>
        <div class="lower-footer  ">
            <div class="container">
                <div class="row">
                    <div class="lower-content d-flex">
                        <div>
                            <button>SIGN-UP NOW!</button>
                        </div>
                        <div>
                            <h3>FOLLOW US</h3>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/footer-facebook.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/footer-twitter.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/footer-youtube.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/footer-pinterest.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ Vite::asset('resources/images/footer-periscope.png')}}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


</body>

</html>