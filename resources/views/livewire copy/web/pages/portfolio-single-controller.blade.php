        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{env('MY_PATH').$Enterprise->cover}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">{{$portfolio->title}}</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('portfolioindex')}}">Portifólio</a></li>
                                    <li>{{$portfolio->title}}</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 inner-page-padding">
            	<div class="container">
                    <div class="project-detail-outer">
                    	
                    	<div class="m-b30">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="product-block">
                                        <div class="row">
                                          <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Começo</h4>
                                            <p>{{$this->portfolio->date_start}}</p>
                                          </div>
                                          <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Término</h4>
                                            <p>{{$this->portfolio->date_finish}}</p>
                                          </div>
                                          {{-- <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Client</h4>
                                            <p>Studio Massimo, Italy</p>
                                           </div> --}}
                                          <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Serviço</h4>
                                            <p>{{Str::ucfirst($this->portfolio->service->title)}}</p>
                                          </div>
                                          {{-- <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Location</h4>
                                            <p>Mountain View CA 94043</p>
                                          </div>
                                          <div class="col-md-12 m-b10">
                                            <h4 class="text-uppercase font-weight-600 m-b10">Year</h4>
                                            <p>2019</p>
                                          </div>        --}}                                   
                                      </div>
                                    </div>  
                                </div>
                                <div class="col-md-8">
                                    <div class="mt-box">
                                        <div class="mt-thum-bx mt-img-overlay1 mt-img-effect yt-thum-box">
                                            <img src="{{env('MY_PATH').$gallery[0]['cover']}}" alt="">
                                            {{-- <a href="https://www.youtube.com/watch?v=s3A7AK1K2hc" class="mfp-video play-now">
                                                <i class="icon fa fa-play"></i>
                                                <span class="ripple"></span>
                                            </a> --}}
                                        </div>
                                    </div>                   	
                                </div>
                            </div>
                        </div>                         
                        
                                           
  
                        <div class="project-detail-containt">
                            <div id="desc" class="bg-white text-black">
                                <h3 class="font-weight-600">{{Str::ucfirst($this->portfolio->service->title)}}</h3>
                                <x-markdown>
                                    {{$this->portfolio->description}}
                                </x-markdown>
                                
                                <div class="m-b0">
                                    <div class="mt-divider divider-1px  bg-black"><i class="icon-dot c-square"></i></div>
                                </div>                                
                                
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END  -->

            <!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 inner-page-padding">
            	<div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-b30 text-center">
                        <ul class="filter-navigation inline-navigation masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#" data-hover="All">Todos</a></li>
                            <li><a data-filter=".cat-1" href="#" data-hover="Construction">Antes</a></li>
                            <li><a data-filter=".cat-2" href="#" data-hover="Renovation">Depois</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                        @foreach ($gallery as $item)
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item {{$item->status == true ? 'cat-1' : 'cat-2'}} col-md-4 col-sm-6 m-b30">
                            <div class="image-effect-two hover-shadow">
                                <img src="{{env('MY_PATH').$item->cover}}" alt=""/>
                                <div class="figcaption">
                                    <h4 class="mt-tilte">{{$portfolio->title}}</h4>
                                    <p>{{Str::words($portfolio->title, 10, '...')}}</p>
                                    <a href="#desc" class="read-more site-button btn-effect">Saiba Mais</a>
                                    <a class="mfp-link" href="{{env('MY_PATH').$item->cover}}">
                                    	<i class="fa fa-arrows-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     </div>
                    <!-- GALLERY CONTENT END -->
                    
                   
            	</div>

            
            </div>
            <!-- SECTION CONTENT END  -->
        

        </div>
        <!-- CONTENT END -->