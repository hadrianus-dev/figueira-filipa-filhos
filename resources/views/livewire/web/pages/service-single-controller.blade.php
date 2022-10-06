        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(assets/images/banner/1.jpg);">
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
                                        	<div class="mt-media">
                                       	    	<img src="{{asset('assets/images/s-1.png')}}" alt=""> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                    	<div class="service-about-right m-b30">
                                            <h3 class="m-t0">{{$service->title}}</h3>
                                            <x-markdown>
                                                {{$service->description}}
                                            </x-markdown>
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
            <div class="section-full p-t80 p-b50 bg-gray bg-no-repeat bg-bottom-right" style="background-image:url({{asset('assets/images/background/bg-4.png')}});">
                <div class="container">
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-7 col-sm-6  m-b30">
                            	<div class="brochur bg-dark p-a20">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="p-a30 bg-primary bg-bottom-right" style="background-image:url({{asset('assets/images/background/bg-site.png')}});">
                                                <div class="text-black">
                                                    <h4 class="mt-tilte m-t0">Brochure</h4>
                                                    <p>Typefaces and layouts, and in appearance of different general the content of dorem ipsum dolor sit amet. </p>
                                                    <a href="javascript:;" class="site-button-secondry btn-half"><span> Download brochure</span></a>
                                                </div>
                                            </div>                                    
                                        </div>
                                        <div class="col-md-6">
                                                <div class="text-white p-r15">
                                                    <h4 class="mt-tilte">Let's help you!</h4>
                                                   <p>There are many variations of passages of lorem available, but the majority have suffered alteration in some form, by inject humour, or randomised words which don't look even slightly believable.</p>
                                                    <a href="javascript:;" class="site-button btn-effect">Contact Us</a>
                                                </div>
    
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                            <div class="col-md-5 col-sm-6 m-b30">
                                <div class="our-exp">
                                    <div class="mt-box">
                                        <h3 class="m-t0"><span class="font-weight-100"> We have</span><span class="text-primary"> 15 years</span> experience in construction</h3>
                                    </div>                                    
                                    <span class="progressText text-black"><B>Architecher</B></span>
                                    <div class="progress mt-probar-1  m-b30 m-t10">
                                        <div class="progress-bar bg-primary " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="85%"></span>
                                        </div>
                                    </div>
                                    
                                    <span class="progressText text-black"><B>Construction</B></span>
                                    <div class="progress mt-probar-1 m-b30 m-t10">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="78" aria-valuemin="10" aria-valuemax="100">
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="78%"></span>
                                        </div>
                                    </div>
        
                                   
                                    <span class="progressText text-black"><B>Interior</B></span>
                                    <div class="progress mt-probar-1 m-b30 m-t10">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                            <span  class="popOver" data-toggle="tooltips" data-placement="top" title="40%"></span>
                                        </div>
                                    </div>
                                   
                            
                                </div>
                            </div>
                       </div>  
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
                        
			<!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 bg-parallax bg-cover"  data-stellar-background-ratio="0.5" style="background-image:url({{asset('assets/images/background/bg5.jpg')}});">
            	<div class="container">
                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-center">
							<div class="mt-separator text-white">
								<h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Our</span> Project</h2>
							</div>
						</div>
					</div>                   
                    <!-- TITLE END -->                
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-b15 center">
                        <ul class="masonry-filter link-style  text-uppercase white">
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                <li><a data-filter=".cat-1" href="#">Construction</a></li>
                                <li><a data-filter=".cat-2" href="#">Renovation</a></li>
                                <li><a data-filter=".cat-3" href="#">Outdoor</a></li>
                                <li><a data-filter=".cat-4" href="#">Interiors </a></li>
                                <li><a data-filter=".cat-5" href="#">Consulting</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                    
                    <!-- GALLERY CONTENT START -->
                     <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1  col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/shooping-mall.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Shopping Mall</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/hospital.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Hospital Building</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/garden-house.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Garden House</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>   
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/villa.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Villa</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>    
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/road-construction.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Road Construction</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div> 
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/bridge.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Bridge Construction</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>    
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/building-ren.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Building Renovation</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-2 col-md-3 col-sm-6 m-b30">
                        	<div class="mt-box   image-hover-block">
                                <div class="mt-thum-bx">
                                    <img src="{{asset('assets/images/services/service-projects/dam-construction.jpg')}}" alt="">
                                </div>
                                <div class="mt-info  p-t20 text-white">
                                    <h4 class="mt-tilte m-b10 m-t0">Dam Construction</h4>
                                    <p class="m-b0">Muscat, Sultanate of Oman</p>      
                                </div>
                                <a href="#"></a>                                    
                            </div>    
                        </div>
                               
                     </div>
                    <!-- GALLERY CONTENT END -->
            	</div>

            
            </div>
            <!-- SECTION CONTENT END  -->            
            
            <!-- FAQ START -->
            <div class="section-full p-t80 p-b50 bg-white inner-page-padding">

				<div class="container">

     
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                    	<div class="row">
                            <div class="col-md-6 col-sm-6">

                              <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="mt-separator-outer separator-left">
                                        <div class="mt-separator">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Some</span> FAQ</h2>
                                        </div>
                                    </div>
                                </div>                   
                                <!-- TITLE END -->                                                              
                   
                                <div class="section-content p-b30">
                                    <div class="mt-accordion acc-bg-gray" id="accordion5">
                                        <div class="panel mt-panel">
                                            <div class="acod-head acc-actives">
                                                 <h6 class="acod-title">
                                                    <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
                                                        Choose between rates or instant payment
                                                        <span class="indicator"><i class="fa"></i></span>
                                                    </a>
                                                 </h6>
                                            </div>
                                            <div id="collapseOne5" class="acod-body collapse in">
                                                <div class="acod-content p-tb15"><p> Motivate others and change the way we feel about ourselves. This is why I find them so interesting and crucial on our paths to success mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est.
Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci consectetur vel posuere posuere, rutrum eu ipsum. Cost is important.</p></div>
                                            </div>
                                        </div>
                                        <div class="panel mt-panel">
                                            <div class="acod-head">
                                                 <h6 class="acod-title">
                                                    <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
                                                    Come to see a live preview
                                                    <span class="indicator"><i class="fa"></i></span>
                                                    </a>
                                                 </h6>
                                            </div>
                                            <div id="collapseTwo5" class="acod-body collapse">
                                                <div class="acod-content p-tb15">Inspirational quotes have an amazing ability to motivate others and change the way we feel about ourselves. This is why I find them so interesting and crucial on our paths to success.</div>
                                            </div>
                                        </div>
                                        <div class="panel mt-panel">
                                            <div class="acod-head">
                                                <h6 class="acod-title">
                                                <a data-toggle="collapse"  href="#collapseThree5" class="collapsed"  data-parent="#accordion5">
                                                Choose the correct service
                                                <span class="indicator"><i class="fa"></i></span>
                                                </a>
                                             </h6>
                                            </div>
                                            <div id="collapseThree5" class="acod-body collapse">
                                                <div class="acod-content p-tb15">The leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                                            </div>
                                        </div>
                                    </div>                                        
                               </div>
                            </div>
                        <div class="col-md-6 col-sm-6">
 
                              <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="mt-separator-outer separator-left">
                                        <div class="mt-separator">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Our</span> Solution</h2>
                                        </div>
                                    </div>
                                </div>                   
                                <!-- TITLE END -->                                
                                <div class="row">
                                	<div class="col-md-6">
                            			<div class="mt-icon-box-wraper p-a25 m-b30 onhover-box-shadow bg-gray center">
                                            <div class="mt-icon-box-sm inline-icon text-primary  m-b20 radius bg-secondry  scale-in-center">
                                                <span class="icon-cell text-primary"><i class="flaticon-sketch"></i></span>
                                            </div>
                                            <div class="icon-content text-black">
                                                <h4 class="mt-tilte text-uppercase font-weight-600 m-b20">Assistance</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and setting as Planning.</p>
                                                <a href="#" class="site-button-link" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col-md-6">
                            			<div class="mt-icon-box-wraper p-a25 m-b30 onhover-box-shadow bg-dark center">
                                            <div class="mt-icon-box-sm inline-icon text-primary  m-b20 radius bg-secondry  scale-in-center">
                                                <span class="icon-cell text-primary"><i class="flaticon-ui"></i></span>
                                            </div>
                                            <div class="icon-content text-white">
                                                <h4 class="mt-tilte text-uppercase font-weight-600 m-b20">Financing</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and setting as Planning.</p>
                                                <a href="#" class="site-button-link yellow" data-hover="Read More">Read More <i class="fa fa-angle-right arrow-animation"></i></a>
                                            </div>
                                        </div>                                       
                                    </div>
                                	
                                </div>                         
                        </div>
                    </div>
                </div>
                
             </div>   
            <!-- FAQ -->                        
             

            
 
                      
            
        </div>
        <!-- CONTENT END -->
