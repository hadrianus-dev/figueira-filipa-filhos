<div>
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
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Perguntas</span> FAQ</h2>
                                            </div>
                                        </div>
                                    </div>                   
                                    <!-- TITLE END -->                                                              
                       
                                    <div class="section-content p-b30">
                                        @forelse ($faqData as $item)
                                            <div class="mt-accordion acc-bg-gray" id="accordion{{$item->key}}">
                                                <div class="panel mt-panel">
                                                    <div class="acod-head acc-actives">
                                                        <h6 class="acod-title">
                                                            <a data-toggle="collapse" href="#collapseOne{{$item->key}}" data-parent="#accordion{{$item->key}}" >
                                                                {{$item->question}}
                                                                <span class="indicator"><i class="fa"></i></span>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseOne{{$item->key}}" class="acod-body collapse in">
                                                        <div class="acod-content p-tb15"><p> {{$item->response}}</p></div>
                                                    </div>
                                                </div>
                                            </div>  
                                            @empty

                                            @foreach ($faqs as $item)
                                            <div class="mt-accordion acc-bg-gray" id="accordion{{$item->key}}">
                                                <div class="panel mt-panel">
                                                    <div class="acod-head acc-actives">
                                                        <h6 class="acod-title">
                                                            <a data-toggle="collapse" href="#collapseOne{{$item->key}}" data-parent="#accordion{{$item->key}}" >
                                                                {{$item->question}}
                                                                <span class="indicator"><i class="fa"></i></span>
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapseOne{{$item->key}}" class="acod-body collapse in">
                                                        <div class="acod-content p-tb15"><p> {{$item->response}}</p></div>
                                                    </div>
                                                </div>
                                            </div>  
                                            @endforeach
                                            
                                            @endforelse

                                                                              
                                   </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
     
                                  <!-- TITLE START -->
                                    <div class="section-head">
                                        <div class="mt-separator-outer separator-left">
                                            <div class="mt-separator">
                                                <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Nossa</span> Solução</h2>
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
                                                    <h4 class="mt-tilte text-uppercase font-weight-600 m-b20">Agendamento</h4>
                                                    <p>Agende uma consultoria com os nossos especialistas nos serviços que prestamos.</p>
                                                    <a href="{{route('contact')}}" class="site-button-link" data-hover="Read More">Clique Agora <i class="fa fa-angle-right arrow-animation"></i></a>
                                                </div>
                                            </div>                                    
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-icon-box-wraper p-a25 m-b30 onhover-box-shadow bg-dark center">
                                                <div class="mt-icon-box-sm inline-icon text-primary  m-b20 radius bg-secondry  scale-in-center">
                                                    <span class="icon-cell text-primary"><i class="flaticon-ui"></i></span>
                                                </div>
                                                <div class="icon-content text-white">
                                                    <h4 class="mt-tilte text-uppercase font-weight-600 m-b20">Parcería</h4>
                                                    <p>Estamos abertos ao alargamento de serviços e parcerias são bem-vindas.</p>
                                                    <a href="{{route('contact')}}" class="site-button-link yellow" data-hover="Read More">Clique Agora <i class="fa fa-angle-right arrow-animation"></i></a>
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
