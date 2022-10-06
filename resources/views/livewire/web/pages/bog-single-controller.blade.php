        <!-- CONTENT START -->
        <div class="page-content ">
            <!-- INNER PAGE BANNER -->
            <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{asset('assets/images/banner/3.jpg')}});">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="mt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-b0">{{$post->title}}</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="mt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>{{$post->title}}</li>
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
                    <div class="row">
                        <div class="col-md-8 col-md-7">
                            <!-- BLOG START -->
                            <div class="blog-post date-style-3 blog-detail text-black">
                                <div class="mt-post-media clearfix m-b30">
                                    <ul class="grid-post">
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-responsive" src="{{env('MY_PATH'). $post->cover}}" alt="">
                                            </div>
                                        </li>
                                  </ul>
                                </div>
                                
                                <div class="mt-post-meta ">
                                    <ul>
                                        <li class="post-date"><strong>{{$post->created_at->diffForHumans()}} </strong> </li>
                                        <li class="post-author"><a href="javascript:void(0);">By <span>{{$post->user->first_name}}</span></a> </li>
                                        <li class="post-category"><a href="javascript:void(0);"><span>{{$post->category->title}}</span></a> </li>
                                    </ul>
                                </div>  
                                                              
                                <div class="mt-post-title ">
                                    <h2 class="post-title"><a href="javascript:void(0);" class="font-weight-600">{{$post->title}}</a></h2>
                                </div>
                                
                                <div class="mt-post-text">
                                    <x-markdown>
                                        {{$post->description}}
                                    </x-markdown>
                                </div>
                                
                                <div class="autor-post-tag-share bdr-t-1 bdr-solid bdr-gray p-t20">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mt-box">
                                            
                                            <div class="clearfix">
                                                <h4>Compartilhe este artigo:</h4>
                                                <div class="widget_social_inks">
                                                    <ul class="social-icons social-md social-square social-dark m-b0">
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
                                </div>  
                                                                                 
                            </div>
                            
                            <!-- OUR BLOG START -->
                           
                            <!-- TITLE START -->
                            <div class="section-head ">
                                <div class="mt-separator-outer separator-left">
                                    <div class="mt-separator">
                                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >Artigos</span> Similar</h2>
                                    </div>
                                </div>
                            </div>                   
                            <!-- TITLE END --> 
                 
                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content">
                                <div class="row">
                                   
                                    @forelse ($posts as $similar)
                                    
                                    @if ($similar->category_id == $post->category_id && $similar->key !== $post->key)
                                    <div class="col-md-6 col-sm-6">
                                        <div class="mt-box blog-post latest-blog-3 date-style-1 bg-white m-b30">
                                            <div class="mt-post-media mt-img-overlay7">
                                                <a href="javascript:;"><img src="{{env('MY_PATH'). $similar->cover}}" alt=""></a>
                                            </div>
                                            <div class="mt-post-info p-a30 bg-gray">
                                                <div class="post-overlay-position">
                                                    <div class="mt-post-meta ">
                                                        <ul>
                                                            <li class="post-date"><strong class="text-primary">14</strong> <span>April 2019</span></li>
                                                            <li class="post-author">By <a href="javascript:;">Admin</a> </li>
                                                            
                                                        </ul>
                                                    </div>                                        
                                                    <div class="mt-post-title ">
                                                        <h4 class="post-title m-b0">{{$similar->title}}</h4>
                                                    </div>
                                                    <div class="mt-post-text">
                                                        <p>{{Str::words($similar->body, 8, '...')}}</p> 
                                                    </div>
                                                    <div class="readmore-line">
                                                        <span><a href="#" class="site-button-link" data-hover="Read More">Ver Mais <i class="fa fa-angle-right arrow-animation"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    @endif
                                    @empty
                                        @foreach ($posts as $item)
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mt-box blog-post latest-blog-3 date-style-1 bg-white m-b30">
                                                <div class="mt-post-media mt-img-overlay7">
                                                    <a href="javascript:;"><img src="{{env('MY_PATH'). $item->cover}}" alt=""></a>
                                                </div>
                                                <div class="mt-post-info p-a30 bg-gray">
                                                    <div class="post-overlay-position">
                                                        <div class="mt-post-meta ">
                                                            <ul>
                                                                <li class="post-date"><strong class="text-primary">14</strong> <span>April 2019</span></li>
                                                                <li class="post-author">By <a href="javascript:;">Admin</a> </li>
                                                                
                                                            </ul>
                                                        </div>                                        
                                                        <div class="mt-post-title ">
                                                            <h4 class="post-title m-b0">{{$item->title}}</h4>
                                                        </div>
                                                        <div class="mt-post-text">
                                                            <p>{{Str::words($post->body, 8, '...')}}</p> 
                                                        </div>
                                                        <div class="readmore-line">
                                                            <span><a href="{{route('postshow', $post->slug)}}" class="site-button-link" data-hover="Read More">Ver Mais<i class="fa fa-angle-right arrow-animation"></i></a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        @endforeach
                                    @endforelse
                                   
                                </div>
                            </div>
                             
                            <!-- OUR BLOG END -->
                                               
                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <h2 class="comments-title">{{$comments->count()}} Commentario(s)</h2>
                                    <div class="p-tb30">
                                        <!-- COMMENT LIST START -->
                                        <ol class="comment-list">
                                            @forelse ($comments as $item)
                                            <li class="comment">
                                                <!-- COMMENT BLOCK -->
                                                <div class="comment-body">
                                                    <div class="comment-meta">
                                                        <a href="javascript:void(0);">{{$item->created_at->diffForHumans()}}</a>
                                                    </div>                                        
                                                    <div class="comment-author vcard">
                                                        <img  class="avatar photo" src="{{asset('assets/images/testimonials/pic1.jpg')}}" alt="">
                                                        <cite class="fn">{{Str::ucfirst($item->name)}}</cite>
                                                        <span class="says">diz:</span>
                                                    </div>
                                                    <x-markdown>{{Str::ucfirst($item->body)}}</x-markdown>
                                              </div>
                                            </li> 
                                            @empty
                                                
                                            @endforelse
                                        </ol>
                                        <!-- COMMENT LIST END -->
                                        
                                        <!-- LEAVE A REPLY START -->
                                        <div class="comment-respond m-t30" id="respond">
            
                                            <h2 class="comment-reply-title" id="reply-title">Deixe Seu Comentario
                                                <small>
                                                    <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a>
                                                </small>
                                            </h2>
            
                                            <form wire:submit.prevent='comment' class="comment-form bdr-1 bdr-solid bdr-gray p-a20" id="commentform" method="post" >
                                        
                                                <p class="comment-form-author">
                                                    <label for="author">Seu Nome <span class="required">*</span></label>
                                                    <input wire:model.lazy='comment.name' class="form-control" type="text"  placeholder="Nome" id="author">
                                                </p>
                                                
                                                <p class="comment-form-email">
                                                    <label for="email">Email <span class="required">*</span></label>
                                                    <input wire:model.lazy='comment.email' class="form-control" type="text" placeholder="Email"  id="email">
                                                </p>
                                                
                                                <p class="comment-form-comment">
                                                    <label for="comment">Comentario</label>
                                                    <textarea wire:model.lazy='comment.body' class="form-control" rows="8" placeholder="Comentar" id="comment"></textarea>
                                                </p>
                                                
                                                <p class="form-submit">
                                                    <button class="site-button button-sm radius-no " type="submit">Comentar</button>
                                                </p>
                                                
                                            </form>
            
                                        </div>
                                        <!-- LEAVE A REPLY END -->
                                   </div>
                                </div>
                            </div>
                        </div>
                        <!-- SIDE BAR START -->
                        <div class="col-md-4 col-sm-5">
                        
                            <aside  class="side-bar">
                                
                                    <!-- SEARCH -->
                                    <div class="widget bg-white ">
                                        <h4 class="widget-title ">Search</h4>
                                        <div class="search-bx">
                                            <form role="search" method="post">
                                                <div class="input-group">
                                                    <input name="news-letter" type="text" class="form-control bg-gray" placeholder="Write your text">
                                                    <span class="input-group-btn bg-gray">
                                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <!-- OUR CLIENT -->
                                    <div class="widget">
                                        <h4 class="widget-title ">Arquivos Relacionados</h4>
                                        <div class="owl-carousel widget-client p-t10">
                                            @foreach ($post->gallery->all() as $gallery)
                                            <!-- COLUMNS 1 --> 
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo">
                                                        <a href="#"><img src="{{env('MY_PATH'). $gallery->cover}}" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>                                  
                                    

                                    <!-- RECENT POSTS -->
                                    <div class="widget bg-white  recent-posts-entry">
                                        <h4 class="widget-title  ">Artigos Recentes</h4>
                                        <div class="section-content">
                                        	<div class="widget-post-bx">
                                                @foreach ($posts as $item)
                                                <div class="widget-post clearfix">
                                                    <div class="mt-post-media">
                                                        <img src="{{env('MY_PATH'). $item->cover}}" alt="">
                                                    </div>
                                                    <div class="mt-post-info">
                                                        <div class="mt-post-meta">
                                                            <ul>
                                                                <li class="post-author">{{$item->created_at->diffForHumans()}}</li>
                                                                <li class="post-comment">{{$item->comment->count()}}</li>
                                                            </ul>
                                                        </div>                                            
                                                        <div class="mt-post-header">
                                                            <h6 class="post-title">{{Str::words($post->body, 5, '...')}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>                                    
                                                
                                    <!-- OUR GALLERY  -->
                                    <div class="widget widget_gallery mfp-gallery">
                                        <h4 class="widget-title  ">Arquivos Relacionados</h4>
                                        <ul>
                                            @foreach ($post->gallery->all() as $gallery)
                                             
                                            <li>
                                                <div class="mt-post-thum">
                                                    <a href="{{env('MY_PATH'). $gallery->cover}}" class="mfp-link" ><img src="{{env('MY_PATH'). $gallery->cover}}" alt=""></a>
                                                </div>
                                            </li>
                                               
                                            @endforeach
                                        
                                        </ul>
                                    </div> 
                                                                                                            
                               </aside>
    
                        </div>
                        <!-- SIDE BAR END -->                            
                    </div>
                                      

                        
                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->