        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(assets/images/banner/4.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">Entre em Contacto connosco</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Contacte-nos</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80 inner-page-padding">
                <!-- LOCATION BLOCK-->
                <div class="container">
                
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="row">
                        	<div class="col-md-8 col-sm-6">
                            	<form class="contact-form cons-contact-form" method="post" action="form-handler.php">
                                    <div class="contact-one m-b30">
                                    
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="mt-separator-outer separator-left">
                                            <div class="mt-separator">
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Deixe</span> Um Email</h2>
                                            </div>
                                        </div>
                                    </div>                   
                                    <!-- TITLE END --> 
                                                                        
                                        <div class="form-group">
                                            <input name="username" type="text" required class="form-control" placeholder="Name">
                                        </div>
                                   
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required placeholder="Email">
                                        </div>
                                   
                                        <div class="form-group">
                                            <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                        </div>
                                    
                                    	<div class="text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button btn-effect">submeter
                                                    
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>                        
                            <div class="col-md-4 col-sm-6">
                            	<div class="contact-info m-b30">
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="mt-separator-outer separator-left">
                                            <div class="mt-separator">
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Info</span>line</h2>
                                            </div>
                                        </div>
                                    </div>                   
                                    <!-- TITLE END --> 
                                    <div class="bg-dark p-a20 text-white">                               
                                        <div class="mt-icon-box-wraper left p-b40">
                                            <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Telefone Geral</h5>
                                                <p>{{$Enterprise->general_phone}}</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper left p-b40">
                                            <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Telefone Comercial</h5>
                                                <p>{{$Enterprise->comercial_phone}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-icon-box-wraper left p-b40">
                                            <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Email</h5>
                                                <p>{{$Enterprise->general_email}}</p>
                                            </div>
                                        </div>
                                        {{-- 
                                        <div class="mt-icon-box-wraper left">
                                            <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Endereço</h5>
                                                <p>09, Martin Street B190 Polo Alto, San Francisco</p>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    
                    <div class="gmap-outline">
                        <div id="gmap_canvas2" class="google-map"></div>
                    </div>                    
                </div>
           </div>
         
            <!-- SECTION CONTENT END -->
            
        </div>
        <!-- CONTENT END -->
