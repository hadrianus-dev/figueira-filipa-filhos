        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{asset('assets/images/banner/1.jpg')}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">Trabalhamos para que a excelência do que fazemos seja a sua recomendação</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Quem Somos</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb80 bg-white inner-page-padding">
                <div class="container">
                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-left">
							<div class="mt-separator">
								<h2 class="text-uppercase sep-line-one"><span class="font-weight-300 text-primary">Conheça a</span> Figueira, Filipa & Filhos</h2>
							</div>
						</div>
					</div>                   
                    <!-- TITLE END -->                 
                    <div class="section-content ">
                    	<div class="row">
                        	<div class="col-md-5 col-sm-6">
                            	<div class="m-about ">
                            		<div class="owl-carousel about-us-carousel">
                                        <!-- COLUMNS 1 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/portrait/pic4.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/portrait/pic5.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 3 -->
                                        <div class="item">
                                            <div class="owl-img">
                                                <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/portrait/pic6.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 4 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/portrait/pic7.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 5 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="{{asset('assets/images/gallery/portrait/pic1.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                   </div>
                               </div>
                            </div>                        
                    		<div class="col-md-7 col-sm-6">
                            	<div class="m-about-containt text-black p-t80">
                                	<div class="m-about-years bg-moving" style="background-image:url({{asset('assets/images/background/line.png')}});">
                                        <span class="text-primary large-title">25</span>
                                        <span class="large-title-info">Anos de Esperiência</span>
                                    </div>
                                    <h3 class="font-weight-600">{{$Enterprise->slogan}}</h3>
                                    <p>
                                        <x-markdown>
                                            {{$Enterprise->description}}
                                        </x-markdown>
                                    </p>
                                    <div class="author-info p-t20">
                                    
                                        <div class="author-signature">
                                            <img src="{{asset('assets/images/Signature+Black.png')}}" alt="Signature" width="150"/>
                                        </div>
                                        
                                        <div class="author-name">
                                            <h4 class="m-t0">David Houkr</h4>
                                            <p>Architecture &amp; Founder</p>
                                        </div>
										<a href="{{route('contact')}}" class="site-button btn-effect m-b15"><span>Contacto-nos</span></a>                                        
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>                           

                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
            
            <!-- OUR SPECIALLIZATION START -->
            <div class="section-full p-tb80 bg-white bg-repeat square_shape2 inner-page-padding"  style="background-image:url({{asset('assets/images/background/ptn-1.png')}})">

				<div class="container">

                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-left">
							<div class="mt-separator">
								<h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Our</span> Speciallization</h2>
							</div>
						</div>
					</div>                   
                    <!-- TITLE END --> 
     
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    
                                    <div class="mt-icon-box-wraper m-b30">
                                        <div class="relative icon-count-2 bg-gray p-a30 p-tb50">
                                            <span class="icon-count-number">1</span>
                                            <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                <span class="icon-cell"><img src="{{asset('assets/images/icon/crane-1.png')}}" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b25">Building <br>Construction</h4>
                                                <p>lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.</p>
                                                <a href="#" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>
                                    </div>                            	
                                    
                                </div>
                                
                                <div class="col-md-3 col-sm-6">
                                    
                                    <div class="mt-icon-box-wraper m-b30">
                                        <div class="relative icon-count-2 bg-gray p-a30 p-tb50">
                                            <span class="icon-count-number">2</span>
                                            <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                <span class="icon-cell"><img src="{{asset('assets/images/icon/renovation.png')}}" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b25">Building <br>Renovation</h4>
                                                <p>lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.</p>
                                                <a href="#" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>
                                    </div>                            	
                                    
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    
                                    <div class="mt-icon-box-wraper m-b30">
                                        <div class="relative icon-count-2 bg-gray p-a30 p-tb50">
                                            <span class="icon-count-number">3</span>
                                            <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                <span class="icon-cell"><img src="{{asset('assets/images/icon/toolbox.png')}}" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b25">Building <br>Maintenance</h4>
                                                <p>lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.</p>
                                                <a href="#" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>
                                    </div>                            	
                                    
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    
                                    <div class="mt-icon-box-wraper m-b30">
                                        <div class="relative icon-count-2 bg-gray p-a30 p-tb50">
                                            <span class="icon-count-number">4</span>
                                            <div class="icon-md inline-icon m-b15 text-primary scale-in-center">
                                                <span class="icon-cell"><img src="{{asset('assets/images/icon/compass.png')}}" alt=""></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="mt-tilte m-b25">Architecture<br>Design</h4>
                                                <p>lorem Ipsum available, but the majority have suffered alterati on in some form, by ious by accident.</p>
                                                <a href="#" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>
                                    </div>                            	
                                    
                                </div>										
                                                                                         
                            </div>
                    </div>
                </div>
                
             </div>   
            <!-- OUR SPECIALLIZATION END -->            
             
            <!-- OUR TEAM START -->
            <div class="section-full p-t80 p-b50 bg-white inner-page-padding">
				<div class="container">
                
                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-left">
							<div class="mt-separator">
								<h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Nossa</span> Liderença</h2>
							</div>
						</div>
					</div>                   
                    <!-- TITLE END -->               
     
                    <!-- IMAGE Team START -->
                    <div class="section-content">
                        <div class="row">
                        @forelse ($Team as $team)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                            
                            <div class="our-team-1 hover-animation-1">
                              <div class="profile-image scale-in-center"><img src="{{env('MY_PATH'). $team->cover}}" alt="" /></div>
                                <div class="figcaption">
                                    <h4>{{$team->full_name}} </h4>
                                    <h5>{{$team->responsability}}</h5>
                                    <p>{{Str::words($team->description, 5, '...')}}</p>
                                    <div class="icons">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"> <i class="fa fa-twitter"></i></a>
                                        <a href="#"> <i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                        <a href="#"> <i class="fa fa-youtube"></i></a>
                                        <a href="#"> <i class="fa fa-linkedin"></i></a>                                        
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
            <!-- OUR TEAM END -->                      
            
        </div>
        <!-- CONTENT END -->
