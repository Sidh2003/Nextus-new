<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="/frontend/css/bootstrap.css" rel="stylesheet">
<link href="/frontend/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="/frontend/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="/frontend/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="/frontend/css/style.css" rel="stylesheet">
<link href="/frontend/css/responsive.css" rel="stylesheet">

<link href="/frontend/css/my.css" rel="stylesheet">

<link rel="shortcut icon" href="/frontend/images/favicon.png" type="image/x-icon">
<link rel="icon" href="/frontend/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">            
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
          

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li>Need help?</li>
                        	<li><a href="tel:+91-8956666659"><span class="icon flaticon-technology-2"></span>+91 895 666 6659</a></li>
                            <li><a href="mailto:info@nextusglobalservices.com"><span class="icon flaticon-envelope-1"></span>info@nextusglobalservices.com</a></li>
                            <li><a href="#"><span class="icon flaticon-placeholder"></span>Kalyan West, Thane, Maharashtra, 421301</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                
                        
                        <!--Language-->
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#0"><span class="flag-icon"><img src="/frontend/images/icons/flag.png" alt=""/></span></a>
                        	
                        </div>

                         <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#0"><span class="flag-icon"><img src="/frontend/my_img/ind.jpg" alt=""/></span></a>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="/frontend/my_img/1transparency.webp" alt="" style="height: 55px; width:170px;"></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class=" dropdown"><a href="/">Home</a>
                                    </li>
                                    <li class="dropdown"><a href="about">About Us</a>
                                    	
                                    </li>
                                    <li class="dropdown"><a href="/services">Services</a>
                                    	
                                    </li>
                                  
                                    <li><a href="/contact">Contact us</a></li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <div class="outer-box">
                        
                        	<!--Cart Box-->
                        	
                            
                            <!--Search Box-->
                            <div class="search-form">
                               <a href="#0" class="theme-btn btn-style-two" style="padding: 5px 33px; !important">Careers</a>
                            </div>
                            
                        </div>
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
    
    </header>
    <!--End Main Header -->
    
    @yield('content')
    
    <!--Main Footer-->
    <footer class="main-footer">
    <div class="auto-container">

        <!--Upper Box-->
        <div class="upper-box">
            <div class="row clearfix">
                <!--Footer Logo-->
                <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href="/"><img src="/frontend/my_img/1transparency.webp" alt="" style="height: 55px; width:170px;"></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- About Column -->
                <div class="column appointment-column col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        <h2>About Nextus</h2>
                        <p>
                            NextUs Global Services strives to grow your business to the optimal level with our expert services.
                            We are an India-based company working around the world.
                            We curate customized strategies that are profitable for your business.
                        </p>
                    </div>
                </div>

                <!-- Links Column -->
                <div class="column links-column col-md-3 col-sm-6 col-xs-12">
                    <ul class="links-footer">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/services">Our Services</a></li>
                        <li><a href="/contact">Careers</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Network Column -->
                <div class="column network-column col-md-5 col-sm-6 col-xs-12">
                    <div class="network-info-tabs">
                        <div class="network-tabs tabs-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="our-branches dropdown">
                                    <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true" href="#0">
                                        <span class="icon flaticon-international"></span>
                                        <span class="toggle-text">Address</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tabs Container -->
                            <div class="tabs-content">
                                <div class="tab active-tab" id="network-one">
                                    <div class="content">
                                        <div class="row clearfix">
                                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                                <div class="text">
                                                    4th Floor, Gate no 2, Soman Sun City, Bhoirwadi,
                                                    opp Skydeck Hotel, Kalyan (W) 421301.
                                                </div>
                                            </div>
                                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                                <div class="text">
                                                    Phone: <a href="tel:+918956666659">+91 895 666 6659</a><br>
                                                    Queries: <a href="mailto:info@nextusglobalservices.com">info@nextusglobalservices.com</a><br>
                                                    Careers: <a href="mailto:hr@nextusglobalservices.com">hr@nextusglobalservices.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab End -->
                            </div>

                            
                        </div>
                        
                    </div>
                     <div class="footer-images" style="margin-top: 15px;">
                        <img src="/frontend/my_img/1.webp" alt="Image 1" style="height: 85px; margin-right: 10px;">
                        <img src="/frontend/my_img/2.png" alt="Image 2" style="height: 85px; margin-right: 10px;">
                        <img src="/frontend/my_img/3.webp" alt="Image 3" style="height: 85px;">
                    </div>
                </div>
                   
            </div>
            
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="column col-md-4 col-sm-12 col-xs-12">
                    <div class="copyright">
                        Copyright &copy; 2025 The
                        <a href="https://nextusglobalservices.com/">Nextus global services.</a>
                        All rights reserved.
                    </div>
                </div>

                <!-- Middle Column -->
                <div class="social-column col-md-5 col-sm-12 col-xs-12">
                    <ul class="social-icon-one">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>

                <!-- Right Column (Social + Images) -->
                <div class="social-column col-md-3 col-sm-12 col-xs-12">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>

                    <!-- Added Images -->
                  
                </div>

            </div>
        </div>
    </div>
</footer>

    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="/frontend/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/frontend/js/main-slider-script.js"></script>

<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.fancybox.pack.js"></script>
<script src="/frontend/js/owl.js"></script>
<script src="/frontend/js/wow.js"></script>
<script src="/frontend/js/appear.js"></script>
<script src="/frontend/js/jquery-ui.js"></script>
<script src="/frontend/js/script.js"></script>
</body>

</html>