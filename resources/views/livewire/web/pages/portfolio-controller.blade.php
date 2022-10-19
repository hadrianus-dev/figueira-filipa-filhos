 <!-- CONTENT START -->
 <div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{env('MY_PATH').$Enterprise->cover}});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="mt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="m-b0">Nosso Portifolio</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li> Portifolio</li>
                    </ul>
                </div>
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-tb80 bg-gray inner-page-padding">
        <div class="container-fluid">
            <div class="section-content">            
                @foreach ($portfolios as $portfolio)
                <!--Portfolio Single Start-->
                @if ($portfolio->gallery())
                <!-- COLUMNS 1 -->
                <div class="masonry-item cat-1  col-md-4 col-sm-6 m-b30">
                    <div class="image-effect-two hover-shadow">
                        <img src="{{env('MY_PATH').$portfolio->gallery()->first()->cover}}" alt=""/>
                        <div class="figcaption">
                            <h4 class="mt-tilte">{{$portfolio->title}}</h4>
                            <p>{{Str::words($portfolio->body, 15, '...')}}</p>
                            <a href="{{route('portfolioshow', $portfolio->slug)}}" class="read-more site-button btn-effect">Ver Portifólio</a>
                            <a class="mfp-link" href="{{env('MY_PATH').$portfolio->gallery()->first()->cover}}">
                                <i class="fa fa-arrows-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- COLUMNS 1 -->
                @endif
                @endforeach 
            </div>
        </div>
    </div>           
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->
