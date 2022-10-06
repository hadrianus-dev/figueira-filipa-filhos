 <!-- CONTENT START -->
 <div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(assets/images/banner/3.jpg);">
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
                <div class="work-carousel-outer">
                    <div class="owl-carousel work-carousel owl-btn-vertical-center">
                        @foreach ($portfolios as $portfolio)
                        <!--Portfolio Single Start-->
                        @if ($portfolio->gallery())
                        <!-- COLUMNS 1 -->
                        <div class="item mt-box">
                            <div class="mt-img-effect mt-img-overlay7">
                                <img src="{{env('MY_PATH').$portfolio->gallery()->first()->cover}}" alt="">
                           </div>
                            <div class="mt-info p-a30">
                                <h4 class="m-b20 m-t0"><a href="{{route('portfolioshow', $portfolio->slug)}}">{{$portfolio->title}}</a></h4>
                                <p>{{Str::words($portfolio->body, 8, '...')}}</p>
                                <a href="{{route('portfolioshow', $portfolio->slug)}}" class="site-button btn-effect">Ver Portifólio</a>
                            </div>                                   
                        </div>
                        @endif
                        @endforeach                                                                                                     
                     </div>
                </div> 
             </div>
         </div>
     </div>           
    <!-- SECTION CONTENT END  -->

</div>
<!-- CONTENT END -->
