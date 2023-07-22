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