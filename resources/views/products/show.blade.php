@extends('layouts.app')


@section('content')

<main>
    <div >
        <img id="jumbo"  class="flex" src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" >
    </div>
    <div class="blue">
        <div class="container  ">
            <div class="row height  pb-3"> 
                <div class="position-relative">
                    <div class="thumbnail">
                        <img id="thumb" src="{{ $product['thumb']}}" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>
                    {{$product ['title']}}
                </h1>
                <div class="d-flex justify-content-between">
                    <div class="d-flex justify-content-between w-75">
                        <div>
                            U.S Price: {{$product['price']}}
                        </div>
                        <div>
                            AVAILABLE
                        </div>
                    </div>
                    <div>
                        Check Aviability
                    </div>
                </div>
                
                <div>
                    {{$product['description']}}
                </div>
            </div>
            <div class="col-4">
                <div class="text-end">
                    <div >
                        ADVERTISEMENT
                    </div>
                    <div>
                        <img id="thumb" src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12">
                
            </div>
            
        </div>   

    </div>
</main>


  


@endsection