        <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-light	footer-wide">
            <div class="container call-to-action-wrap bg-no-repeat bg-center" style="background-image:url({{asset('./public/assets/images/background/bg-site.png')}});">
                <div class="p-a30  bg-primary">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-left text-black">
                                <h4 class="text-uppercase m-b10 m-t0">Subscreva-se e receba newsletter!</h4>
                                <span>Acompanhe-nos, fique por dentro de todas às novidades da FFF.</span>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <div class="call-to-action-right">
                                <div class="widget_newsletter">
                                    <div class="newsletter-bx">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="news-letter" class="form-control" placeholder="INSIRA O SEU EMAIL" type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                                           
                            </div>
                        </div>
                    </div>
                 </div>
            </div>            
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6 col-sm-6">  
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{asset('./public/assets/images/logoff.png')}}" alt=""></a>
                                </div>
								<p class="max-w400">{{Str::words($Enterprise->body, 20, '...')}}</p>                                
                                
                                <ul class="social-icons  mt-social-links">
                                    <li><a href="javascript:void(0);" class="fa fa-google"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>                                     
                            </div>
                        </div> 
                        
                        <!-- RESENT POST -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_address_outer">
                                <h4 class="widget-title">Contacte-nos</h4>
                                <ul class="widget_address">
                                    <li>Luanda, Viana, Luanda-Sul, Rua Direita da Clinica Dentária</li>
                                    <li>{{$Enterprise->comercial_email}}</li>
                                    <li>{{$Enterprise->general_phone}}</li>
                                    <li>{{$Enterprise->comercial_phone}}</li>
                                </ul>
                           
                            </div>                                              	
                        </div>                          
                        
                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">Usefual links</h4>
                                <ul>
                                    <li><a href="{{route('about')}}">Quem Somos</a></li>
                                    <li><a href="{{route('portfolioindex')}}">Portifólio</a></li>
                                    <li><a href="{{route('portfolioindex')}}">Notíicias</a></li>
                                    <li><a href="{{route('contact')}}">Contacto</a></li>
                                </ul>
                            </div>                           
                        </div>
                        
                        <!-- TAGS -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget recent-posts-entry-date">
                                <h4 class="widget-title">Posts Recentes</h4>
                                <div class="widget-post-bx">
                                    @foreach ($posts as $post)
                                    <div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                        <div class="mt-post-date text-center text-uppercase text-white p-tb5">
											<strong class="p-date">{{$post->created_at->day}}</strong>
                                            <span class="p-month">{{$post->created_at->month}}</span>
                                            <span class="p-year">{{$post->created_at->year}}</span>
                                        </div>
                                        <div class="mt-post-info">
                                            <div class="mt-post-header">
                                                <h6 class="post-title"><a href="blog-single.html">{{Str::words($post->body, 6, '...')}}</a></h6>
                                            </div>
                                            <div class="mt-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By {{$post->user->first_name}}</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> {{$post->comment->count()}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>                          
                        </div>
                        <!-- NEWSLETTER -->

                    </div>
                </div>  
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="mt-footer-bot-center">
                            <span class="copyrights-text">© 2022 Figueira, Filipa e Filhos. Development by DigitalAlfre.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->              
