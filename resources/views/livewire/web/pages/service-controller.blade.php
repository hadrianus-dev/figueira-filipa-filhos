        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(assets/images/banner/1.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">A Diversidade com que trabalhamos, nos faz mais recomendaveis.</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Serviços</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
             <!-- OUR All SERVICES START -->
            <div class="section-full p-t80 p-b50 bg-white" style="background-image:url(assets/images/background/bg-5.png);">

				<div class="container">

                    <!-- TITLE START -->
					<div class="section-head">
						<div class="mt-separator-outer separator-center">
							<div class="mt-separator">
								<h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Todos os</span> Serviços</h2>
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
                                        <a href="{{route('serviceshow', $service->slug)}}" class="site-button-link" data-hover="Read More">Ver Serviço <i class="fa fa-angle-right arrow-animation"></i></a>
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
            <livewire:web.component.experience-controller>                     

            <livewire:web.component.f-a-q-s-controller>
            
    </div>
    <!-- CONTENT END -->