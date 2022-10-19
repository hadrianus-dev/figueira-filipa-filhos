        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{env('MY_PATH').$Enterprise->cover}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">Acompanhe todas as novidades por aqui mesmo</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Noticias</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 bg-white inner-page-padding">
                
                <!-- GALLERY CONTENT START -->
                <div class="container">
                    <div class="portfolio-wrap mfp-gallery news-grid clearfix row ">
                        @forelse ($Post as $post)	
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item  col-lg-4 col-md-4 col-sm-6">
								<div class="blog-post blog-grid date-style-2">
                                
                                    <div class="mt-post-media mt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{env('MY_PATH'). $post->cover}}" alt=""></a>
                                    </div>
                                    
                                    <div class="mt-post-info p-t30">
                                
                                        <div class="mt-post-title ">
                                            <h4 class="post-title"><a href="{{route('postshow', $post->slug)}}">{{Str::ucfirst($post->category->title)}}</a></h4>
                                        </div>
                                        
                                        <div class="mt-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i><strong>17</strong> <span>Feb</span> </li>
                                                <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0 Comments</a> </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="mt-post-text">
                                            <p>{{Str::words($post->body, 8, '...')}}</p> 
                                        </div>
                                        
                                        <div class="clearfix">
                                            <div class="mt-post-readmore pull-left">
                                                 <a href="{{route('postshow', $post->slug)}}" title="Ver Mais" rel="bookmark" class="site-button-link">Ver Mais<i class="fa fa-angle-right arrow-animation"></i></a>
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
                    <ul class="pagination m-tb0">
                       <li><a href="#">«</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">»</a></li>
                    </ul>
                </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
