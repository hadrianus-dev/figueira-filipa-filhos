        <!-- HEADER START -->
        <header class="site-header header-style-2">
			<!-- Search Form -->
            <div class="header-middle bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="index.html">
                            <img src="{{asset('assets/images/logoff.png')}}" width="216" height="37" alt="" />
                        </a>
                    </div>
                    <div class="header-info">
                        <ul>
                        	<li>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Luanda, Angola</strong>
                                    <span>Viana, Luanda Sul, Rua Direita da Clinica Dentária</span>
                                </div>
                            </li>
                            <li>
                           
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="fa fa-phone"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>+244 123 456 789</strong>
                                    <span>Segunda - Sexta: 8:00/17:00</span>
                                </div>
                            
                            </li>
                            <li class="btn-col-last">
                                <a href="javascript:;" data-toggle="modal" data-target="#with-form" class="site-button-secondry btn-effect">
                                    Pedir Cotação
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
			<!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">											
                                <a href="#search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="extra-cell">
                                <a href="#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                            </div>                                
                        </div>
                        <!-- ETRA Nav -->

                        <!-- Contact Nav -->                            
                        <div class="contact-slide-hide " style="background-image:url({{asset('assets/images/background/bg-5.png')}})"> 
                            <div class="contact-nav">
                                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                                 <div class="contact-nav-form p-a30">
                                    <div class="contact-info   m-b30">
                         
                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Contacto</h5>
                                                <p>(+244) 123-222-222</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Endereço Eletrônico</h5>
                                                <p>comercia@figueirafilipaefilhos.com</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Nosso Endereço</h5>
                                                <p>Luanda-Sul, Rua Direita da Clinica Dentária</p>
                                            </div>
                                        </div>
                                    </div>                                          
                                    <div class="full-social-bg">
                                        <ul>
                                          <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
                                          <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                          <li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
                                          <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <h4 class="font-weight-600">&copy;  2019 FFF</h4> 
                                    </div>                                                                    			
                                 </div>
                            </div> 
                        </div>     
                        <!-- SITE Search -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
                                </div>   
                            </form>
                        </div>
                        
                        <!-- MAIN Nav -->
                        <div class="header-nav navbar-collapse collapse">
                                <ul class=" nav navbar-nav">
                                    <li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">
                                        <a href="{{route('home')}}">Home</a>
                                    </li>

                                    <li class="{{Route::currentRouteName() == 'about' ? 'active' : ''}}">
                                        <a href="{{route('about')}}">Sobre</a>
                                    </li> 
                                    <li class="{{(Route::currentRouteName() == 'serviceindex' || Route::currentRouteName() == 'serviceshow') ? 'active' : ''}}">
                                        <a href="{{route('serviceindex')}}">Serviços</a>
                                    </li>                              

                                    <li class="{{(Route::currentRouteName() == 'portfolioindex' || Route::currentRouteName() == 'portfolioshow') ? 'active' : ''}}">
                                        <a href="{{route('portfolioindex')}}">Portifólio</a>
                                    </li>

                                    <li class="{{(Route::currentRouteName() == 'postindex' || Route::currentRouteName() == 'postshow') ? 'active' : ''}}">
                                        <a href="{{route('postindex')}}">Notícias</a>
                                    </li>

                                    <li class="{{(Route::currentRouteName() == 'contact') ? 'active' : ''}}">
                                        <a href="{{route('contact')}}">Contacto</a>
                                    </li>
                                                                  
                                </ul>
                            </div>
                    </div>
                </div>
            </div>            
            
        </header>
        <!-- HEADER END -->