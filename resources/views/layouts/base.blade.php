<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>FFF</title>
 
        <!-- BOOTSTRAP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- FONTAWESOME STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome/css/font-awesome.min.css')}}" />


        <!-- OWL CAROUSEL STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">

        <!-- MAGNIFIC POPUP STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.min.css')}}">
        
        <!-- LOADER STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/loader.min.css')}}">   

        <!-- FLATICON STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.min.css')}}">

        <!-- MAIN STYLE SHEET -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

        <!-- Color Theme Change Css -->
        <link rel="stylesheet" class="skin" type="text/css" href="{{asset('assets/css/skin/skin-1.css')}}">  
        
        <!-- Side Switcher Css-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/switcher.css')}}">    

        <!-- REVOLUTION SLIDER CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/settings.css')}}">
        
        <!-- REVOLUTION NAVIGATION STYLE -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/navigation.css')}}">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
        <div class="page-wraper"> 
            <livewire:web.component.header>
            {{ $slot }}
            <livewire:web.component.footer>

            <!-- BUTTON TOP START -->
            <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
            <!-- LOADING AREA START ===== -->
        </div>
        <div class="loading-area">
            <div class="loading-box"></div>
            <div class="loading-pic">
                <div class="cssload-loader">Loading</div>
            </div>
        </div>
        <!-- LOADING AREA  END ====== -->
         <livewire:web.component.quote-controller>
        <!-- JAVASCRIPT  FILES ========================================= --> 
        <script  src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
        <script  src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

        <script  src="{{asset('assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

        <script  src="{{asset('assets/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
        <script  src="{{asset('assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
        <script  src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

        <script  src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

        <script  src="{{asset('assets/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
        <script src="{{asset('assets/js/jquery.owl-filter.js')}}"></script>

        <script  src="{{asset('assets/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 



        <script  src="{{asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
        <script  src="{{asset('assets/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
        <script  src="{{asset('assets/js/jquery.bgscroll.js')}}"></script><!-- BACKGROUND SCROLL -->
        <script  src="{{asset('assets/js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->
        <!-- REVOLUTION JS FILES -->

        <script  src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script  src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
        <script  src="{{asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script  src="{{asset('assets/js/rev-script-2.js')}}"></script>

        <!-- STYLE SWITCHER  ======= --> 
        <div class="styleswitcher">

            <div class="switcher-btn-bx">
                <a class="switch-btn">
                    <span class="fa fa-cog fa-spin"></span>
                </a>
            </div>
            
            <div class="styleswitcher-inner">
            
                <h6 class="switcher-title">Color Skin</h6>
                <ul class="color-skins">
                    <li><a class="theme-skin skin-1" href="{{asset('?theme=assets/css/skin/skin-1')}}" title="default Theme"></a></li>
                    <li><a class="theme-skin skin-2" href="{{asset('?theme=assets/css/skin/skin-2')}}" title="pink Theme"></a></li>
                    <li><a class="theme-skin skin-3" href="{{asset('?theme=assets/css/skin/skin-3')}}" title="sky Theme"></a></li>
                    <li><a class="theme-skin skin-4" href="{{asset('?theme=assets/css/skin/skin-4')}}" title="green Theme"></a></li>
                    <li><a class="theme-skin skin-5" href="{{asset('?theme=assets/css/skin/skin-5')}}" title="red Theme"></a></li>
                    <li><a class="theme-skin skin-6" href="{{asset('?theme=assets/css/skin/skin-6')}}" title="orange Theme"></a></li>
                    <li><a class="theme-skin skin-7" href="{{asset('?theme=assets/css/skin/skin-7')}}" title="purple Theme"></a></li>
                    <li><a class="theme-skin skin-8" href="{{asset('?theme=assets/css/skin/skin-8')}}" title="blue Theme"></a></li>
                </ul>   
                
            </div>    
        </div>
        <!-- STYLE SWITCHER END ==== -->
        @livewireScripts
    </body>
</html>