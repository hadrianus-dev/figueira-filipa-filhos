        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{env('MY_PATH').$Enterprise->cover}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">{{$service->title}}.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>{{$service->title}}</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-t80 bg-white">
                <div class="container">
                    <div class="section-content ">
                         <div class="m-service-containt text-black">
                         		<div class="row">
                                	<div class="col-md-5 col-sm-12">
                                    	<div class="service-about-left">
                                        	<div class="service-about-right m-b30">
                                                <h3 class="m-t0">{{$service->title}}</h3>
                                                <x-markdown>
                                                    {{$service->description}}
                                                </x-markdown>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                    	<div class="service-about-right m-b30">
                                        
                                            <div class="call-for-quote-outer">
                                            	<div class="call-quote">
                                                	<span>Solicite Agora:</span>
                                                    <h4>{{$Enterprise->comercial_phone}}</h4>
                                                </div>
                                                <div class="call-estimate bg-dark">
                                                	<a href="javascript:;" class="site-button-secondry btn-effect">Cotação Por Email</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
            
            <!-- OUR SPECIALLIZATION START -->
            <div class="section-full p-t80 p-b30 bg-dark" style="background-image:url(assets/images/background/bg-6.png);">
				<div class="container">
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="section-head m-b50 text-white text-center">
                            <h3 class="m-t0">Não esqueça, a sua solicitação é sempre uma prioridade</h3>
                            <x-markdown>
                            {{$service->body}}
                            </x-markdown>
                        </div>
                    </div>
                </div>
             </div>   
            <!-- OUR SPECIALLIZATION END -->  
            
            <!-- ABOUT COMPANY SECTION START -->
            <livewire:web.component.experience-controller>       
            <!-- ABOUT COMPANY SECTION END -->
                        
			<!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/background/bg5.jpg')}});">
            	<div class="container">
                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-center">
							<div class="mt-separator text-white">
								<h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Veja</span> Portfólio</h2>
							</div>
						</div>
					</div>                   
                    <!-- TITLE END -->     
                    
                    <!-- COLUMNS 1 -->
                    @forelse ($portfolio as $item)
                    <div class="masonry-item cat-1  col-md-4 col-sm-6 m-b30">
                        <div class="image-effect-two hover-shadow">
                            <img src="{{env('MY_PATH').$item->gallery()->first()->cover}}" alt=""/>
                            <div class="figcaption">
                                <h4 class="mt-tilte">{{$item->title}}</h4>
                                <p>{{Str::words($item->body, 15, '...')}}</p>
                                <a href="{{route('portfolioshow', $item->slug)}}" class="read-more site-button btn-effect">Ver Portifólio</a>
                                <a class="mfp-link" href="{{env('MY_PATH').$item->gallery()->first()->cover}}">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    
                    @foreach ( $portfolios as $item )
                    <div class="masonry-item cat-1  col-md-4 col-sm-6 m-b30">
                        <div class="image-effect-two hover-shadow">
                            <img src="{{env('MY_PATH').$item->gallery()->first()->cover}}" alt=""/>
                            <div class="figcaption">
                                <h4 class="mt-tilte">{{$item->title}}</h4>
                                <p>{{Str::words($item->body, 15, '...')}}</p>
                                <a href="{{route('portfolioshow', $item->slug)}}" class="read-more site-button btn-effect">Ver Portifólio</a>
                                <a class="mfp-link" href="{{env('MY_PATH').$item->gallery()->first()->cover}}">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                    
                    
                    @endforelse
                    <!-- COLUMNS 2 -->
                   
            	</div>

            
            </div>
            <!-- SECTION CONTENT END  -->            
            
            <!-- FAQ START -->
            <livewire:web.component.f-a-q-s-controller :faqData='$this->FAQ'>  
            <!-- FAQ -->                        
             

            
 
                      
            
        </div>
        <!-- CONTENT END -->
