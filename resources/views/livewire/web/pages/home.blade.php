<div>
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- SLIDER START -->
        <livewire:web.component.carousel-controller>
        <!-- SLIDER END -->
        
        <!-- OUR SPECIALLIZATION START -->
        <div class="section-full bg-white slider-half-part">
            <div class="container">
                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 m-b30">
                            <div class="half-blocks">
                                <div class="mt-icon-box-wraper center m-b30">
                                    <div class="half-block-content icon-count-2 p-a30 p-tb50">
                                        <span class="icon-count-number">1</span>
                                        <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                            <span class="icon-cell"><img src="{{asset('assets/images/icon/compass.png')}}" alt=""></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte m-b25">Missão</h4>
                                            <p>{{$Enterprise->mission}}</p>
                                            <a href="{{route('about')}}" class="site-button-link" data-hover="Read More">Saiba Mais <i class="fa fa-angle-right arrow-animation"></i></a>
                                        </div>
                                    </div>
                                    <div class="bg-cover  half-blocks-bg" style="background-image:url({{asset('assets/images/services/1.jpg')}})"></div>
                                </div>
                            </div>
                                                            
                        </div>
                        <div class="col-md-4 col-sm-4 m-b30">
                        <div class="half-blocks">
                            <div class="mt-icon-box-wraper center m-b30">
                                <div class="half-block-content icon-count-2 bg-gray p-a30 p-tb50">
                                    <span class="icon-count-number">2</span>
                                    <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                        <span class="icon-cell"><img src="{{asset('assets/images/icon/crane-1.png')}}" alt=""></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="mt-tilte m-b25">Visão</h4>
                                        <p>{{$Enterprise->vision}}</p>
                                        <a href="{{route('about')}}" class="site-button-link" data-hover="Read More">Saiba Mais <i class="fa fa-angle-right arrow-animation"></i></a>
                                    </div>
                                </div>
                                <div class="bg-cover  half-blocks-bg" style="background-image:url({{asset('assets/images/services/3.jpg')}})"></div>
                            </div>                                                            
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4 m-b0">
                            <div class="half-blocks">
                            <div class="mt-icon-box-wraper center m-b30">
                                <div class="half-block-content icon-count-2 bg-gray p-a30 p-tb50">
                                    <span class="icon-count-number">3</span>
                                    <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                        <span class="icon-cell"><img src="{{asset('assets/images/icon/renovation.png')}}" alt=""></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="mt-tilte m-b25">Valor</h4>
                                        <p>{{$Enterprise->value}}</p>
                                        <a href="{{route('about')}}" class="site-button-link" data-hover="Read More">Saiba Mais<i class="fa fa-angle-right arrow-animation"></i></a>
                                    </div>
                                </div>
                                <div class="bg-cover  half-blocks-bg" style="background-image:url({{asset('assets/images/services/2.jpg')}})"></div>
                            </div>
                            </div>                              
                        </div>
                                                    
                    </div>
                </div>
            </div>
         </div> 
        <!-- OUR SPECIALLIZATION END --> 
        
        <!-- ABOUT COMPANY START -->
        <div class="section-full " style="background-image:url({{asset('assets/images/background/bg-map.png')}})">
            <div class="services-half-section-top " >
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head">
                        <div class="mt-separator-outer separator-left text-wh">
                            <div class="mt-separator">
                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Sobre a</span> Figueira, Filipa e Filhos</h2>
                            </div>
                            
                        </div>
                    </div>                   
                    <!-- TITLE END --> 
                    
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="owl-carousel about-home about-home-v2 owl-dots-bottom-left">
                                    <!-- COLUMNS 1 --> 
                                    <div class="item ">
                                        <div class="mt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/pic8.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 --> 
                                    <div class="item ">
                                        <div class="mt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/pic6.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 --> 
                                    <div class="item ">
                                        <div class="mt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/pic9.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 4 --> 
                                    <div class="item ">
                                        <div class="mt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/pic2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 5 --> 
                                    <div class="item ">
                                        <div class="mt-img-effect zoom-slow">
                                            <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/pic3.jpg')}}" alt=""></a>
                                        </div>
                                    </div>                                                                                                                                                                
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="about-home-right about-right-v2 bg-primary text-black p-a30">
                                    <h3 class="m-t0"><span class="font-weight-100">Feito,</span> Melhor que perfeito.</h3>
                                    <p><strong>{{$Enterprise->body}}</str   ong></p>
                                        
                                        <div class="text-left">
                                            <a href="{{route('serviceindex')}}" class="site-button-secondry btn-effect">Saiba Mais</a>
                                        </div>                                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
                
                <div class="services-half-section-bottom p-t80 p-b50  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url({{asset('assets/images/background/bg5.jpg')}})">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-primary mt-icon-box-wraper left m-b30">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-city"></i>
                                        </span>
                                        <div class="icon-content text-white">                                
                                            <div class="counter font-50 font-weight-800 m-b5">2500</div>
                                            <span class="font-16">Projectos Feitos</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-primary mt-icon-box-wraper left m-b30">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-worker"></i>
                                        </span>
                                        <div class="icon-content text-white">                                
                                            <div class="counter font-50 font-weight-800 m-b5">1500</div>
                                            <span class="font-16">Clientes Satisfeitos</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-primary mt-icon-box-wraper left m-b30">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-crane"></i>
                                        </span>
                                        <div class="icon-content text-white">                                
                                            <div class="counter font-50 font-weight-800 m-b5">840</div>
                                            <span class="font-16">Projectos em Curso</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    <div class="text-primary mt-icon-box-wraper left m-b0">
                                        <span class="icon-md p-t10">
                                            <i class="flaticon-art-and-design"></i>
                                        </span>
                                        <div class="icon-content text-white">                                
                                            <div class="counter font-50 font-weight-800 m-b5">180</div>
                                            <span class="font-16">Continuos</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>   
            <!-- ABOUT COMPANY END -->
            
            <!-- OUR VALUE START -->
            <div class="section-full p-t80 p-b50 bg-white mobile-page-padding">
                <div class="container">
                    
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-7 col-sm-6">
                                <div class="video-section-full-v2">
                                    <div class="video-section-full bg-no-repeat bg-cover overlay-wraper m-b30" style="background-image:url({{asset('assets/images/video-bg2.jpg')}})">
                                        <div class="overlay-main bg-black opacity-04"></div>
                                        <div class="video-section-inner">
                                            <div class="video-section-content">
                                                <div class="video-section-left">
                                                    <a href="#" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a>  
                                                </div>
                                                <div class="video-section-right">
                                                    <a href="#" class="mfp-video font-weight-600 text-uppercase">Video Presentation</a>
                                                </div>
                                            </div> 
                                        </div>  
                                    </div>
                                </div>                                      	                                	
                            </div>                            
                            <div class="col-md-5 col-sm-6">
                                <!-- TITLE START -->
                                <div class="video-part-2">
                                    <h3><span class="font-weight-100">Provemos</span> o necessário e fazemos tudo acontecer</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.there are many 																				                                                     variations of passages of Ipsum available,</p> 
                                    <ul class="list-angle-right anchor-line">
                                        <li><a href="#">Construction Management</a></li>
                                        <li><a href="#">Pre Construction Services</a></li>
                                        <li><a href="#">Contract Administration</a></li>
                                    </ul>                                           
                                </div>                   
                                <!-- TITLE END -->
                                <div class="author-info author-info-v2 p-t20">
                                    
                                    <div class="author-signature">
                                        <img src="{{asset('assets/images/Signature+Black.png')}}" alt="Signature" width="150">
                                    </div>
                                    <div class="author-name">
                                        <h4 class="m-t0">David Houkr</h4>
                                        <p>Architect & Founder</p>
                                    </div>
                                </div>                                  
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- OUR VALUE END -->            
            
            <!-- OUR BLOG START -->
            <div class="section-full mobile-page-padding p-t80 p-b30 square_shape1 bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/background/bg5.jpg')}});">
                <div class="container">
                    
                    <!-- TITLE START -->
                    <div class="section-head ">
                        <div class="mt-separator-outer separator-center">
                            <div class="mt-separator">
                                <h2 class="text-white text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >Últimas</span> Notícias</h2>
                            </div>
                        </div>
                    </div>                   
                    <!-- TITLE END --> 
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="row">
                            @forelse ($Post as $post)
                            <div class="col-md-4 col-sm-6">
                                <div class="blog-post blog-grid date-style-2 bg-white">
                                    
                                    <div class="mt-post-media mt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{env('MY_PATH'). $post->cover}}" alt=""></a>
                                    </div>
                                    
                                    <div class="mt-post-info p-a30">
                                        
                                        <div class="mt-post-title ">
                                            <h4 class="post-title"><a href="{{route('postshow', $post->slug)}}">{{Str::ucfirst($post->category->title)}}</a></h4>
                                        </div>
                                        
                                        <div class="mt-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17</strong> <span>Feb</span> </li>
                                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>{{Str::ucfirst($post->user->first_name)}}</span></a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">{{$post->comment->count()}} Comentario(s)</a> </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="mt-post-text">
                                            <p>{{Str::words($post->body, 8, '...')}}</p> 
                                        </div>
                                        
                                        <div class="clearfix">
                                            <div class="mt-post-readmore pull-left">
                                                <a href="{{route('postshow', $post->slug)}}" title="READ MORE" rel="bookmark" class="site-button-link">Read More<i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                            <div class="widget_social_inks pull-right">
                                                <ul class="social-icons social-radius social-dark m-b0">
                                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            @empty
                                
                            @endforelse
                        </div>
                    </div>
                </div>
                        
            </div>   
            <!-- OUR BLOG END -->
            
                        <!-- OUR All SERVICES START -->
                        <div class="section-full p-t80 p-b50 bg-dark" style="background-image:url({{asset('assets/images/background/bg-5.png')}});">

                            <div class="container">
            
                                <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="mt-separator-outer separator-center">
                                        <div class="mt-separator text-white">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Nossos</span> Serviços</h2>
                                        </div>
                                    </div>
                                </div>                   
                                <!-- TITLE END -->  
                 
                                <!-- IMAGE CAROUSEL START -->
                                <div class="section-content">
                                    <div class="row">
                                        @forelse ($Services as $service)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="mt-icon-box-wraper p-a30 center m-b30 bg-white">
                                                <div class="mt-icon-box-sm inline-icon text-primary  m-b20 radius bg-primary  scale-in-center bg-moving" style="background-image:url({{asset('assets/images/background/line.png')}})">
                                                    <span class="icon-cell text-secondry"><i class="flaticon-worker"></i></span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte text-uppercase font-weight-600 m-b20">{{Str::ucfirst($service->title)}}</h4>
                                                    <p>{{Str::words($service->body, 10, '...')}}</p>
                                                    <a href="{{route('serviceshow', $service->slug)}}" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            
                         </div>   
                        <!-- OUR All SERVICES END -->  
            
            <!-- CALL US SECTION START -->
            <div class="section-full p-tb80 overlay-wraper bg-center bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/background/bg-10.jpg')}})">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    
                    <div class="section-content">
                        <div class="call-us-section text-center text-white">
                            <h4 class="m-b15">Podemos trabalhar juntos</h4>
                            <h2 class="call-us-number m-b15 m-b0">{{$Enterprise->general_phone}}</h2>
                            <h4 class="call-us-address m-t0 m-b20">Luanda, Viana-Luanda Sul, Rua Direita da Clinica Dentária </h4>
                            <a href="{{route('contact')}}" class="site-button btn-effect">Contacte-nos</a>
                        </div>
                    </div>
                    
                </div>
            </div>   
            <!-- CALL US SECTION END -->
            
            <!-- OUR PROJECT START -->
            <div class="section-full p-t80 p-b50 square_shape2 mobile-page-padding" >
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head">
                        <div class="mt-separator-outer separator-center">
                            <div class="mt-separator">
                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Nosso</span> Portifólio</h2>
                            </div>
                        </div>
                    </div>                   
                    <!-- TITLE END --> 
                        <!-- SECTION CONTENT START -->

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
                    
    <!-- SECTION CONTENT END  -->
                    
                </div>
                
            </div>   
            <!-- OUR PROJECT END -->
            
            <!-- OUR Team START -->
            <div class="section-full p-t80 p-b50 square_shape1 bg-parallax bg-cover" data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/background/bg5.jpg')}});">
                <div class="container">
                    
                    <!-- TITLE START -->
                    <div class="section-head text-center text-white ">
                        <div class="mt-separator-outer separator-center">
                            <div class="mt-separator">
                                <h2 class="text-white text-uppercase sep-line-one"><span class="font-weight-300 text-primary" >Nosso </span> Team</h2>
                            </div>
                        </div>
                        <h2>Trabalhe com a melhor equipe que há</h2>
                    </div>                   
                    <!-- TITLE END --> 
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="row">
                            @forelse ($Team as $team)
                            <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                                <div class="our-team-2 ">
                                    <div class="profile-image scale-in-center"><img src="{{env('MY_PATH'). $team->cover}}" alt="" /></div>
                                    <div class="figcaption text-black">
                                        <h4>{{$team->full_name}} </h4>
                                        <h5>{{$team->responsability}}</h5>
                                        
                                    </div>
                                </div>
                            </div>                            
                            @empty
                            
                            @endforelse                               
                            
                        </div>
                    </div>
                    
                </div>
            </div>   
            <!-- OUR Team END -->
          
        </div>
                            