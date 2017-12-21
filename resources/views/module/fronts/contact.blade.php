<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Desa sukajadi</title>

    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    {{-- <title>{{ config('app.name', 'Desa Sukajadi') }}</title> --}}

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/bootstrap.css') }}" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/style.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/responsive.css') }}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/colors/color1.css') }}" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheets/animate.css') }}">

    <!-- Favicon and touch icons  -->
    <link href="{{ asset('icon/apple-touch-icon-48-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="{{ asset('icon/apple-touch-icon-32-precomposed.png') }}" rel="apple-touch-icon-precomposed">
    <link href="{{ asset('icon/favicon.png') }}" rel="shortcut icon">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>                                 
<body class="header-sticky">   
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    @include('layouts.aquarius.patrials.header')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Engineering & Technology</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>All Course 2</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->
    <!-- Flat contact -->
    <section class="flat-row pad-bottom0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-contactform-home1">
                        <form id="contactform" class="flat-contact-form border-radius field-large text-large" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                    
                                    <div class="input-wrap name">
                                        <input type="text" value="" tabindex="1" placeholder="Your name" name="name" id="name" required>
                                    </div>
                                    <div class="input-wrap email">
                                        <input type="email" value="" tabindex="2" placeholder="Your email" name="email" id="email" required>
                                    </div>
                                    <div class="input-wrap last Subject">
                                        <input type="text" value="" placeholder="Subject" name="subject" id="subject" >
                                    </div>  
                                </div>
                                <div class="textarea-wrap">
                                    <textarea class="type-input" tabindex="3" placeholder="Your Message" name="message" id="message-contact" required></textarea>
                                </div>
                            </div>
                            <div class="submit-wrap">
                                <button>send</button>
                            </div>
                        </form><!-- /.comment-form -->   
                    </div><!-- /.wrap-contactform-home1 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Flat information box -->
    <section class="flat-row pad-top0px pad-bottom85px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flat-information-box inf1">
                        <span class="icon">
                            <i class="icon-Smartphone-4"></i>
                        </span>
                        <div class="content">
                            <div class="title">Telephone 1</div>                        
                            <p>+61 3 8376 6284</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf2">
                        <span class="icon">
                            <i class="icon-Smartphone-4"></i>
                        </span>
                        <div class="content">
                            <div class="title">Telephone 2</div>                        
                            <p>+61 3 8376 6284</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf3">
                        <span class="icon">
                            <i class="icon-Email"></i>
                        </span>
                        <div class="content">
                            <div class="title">Email</div>                        
                            <p>AlitStudios@gmail.com</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf4">
                        <span class="icon">
                            <i class="icon-Edit-Map"></i>
                        </span>
                        <div class="content">
                            <div class="title">Address</div>                        
                            <p>PO Box 16122 Collins Street</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->
            </div>
        </div><!-- /.container -->
    </section>
   
    <!-- Footer -->
    <footer class="footer">        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="widget widget-text">
                        <img src="images/logo-f1.png" alt="logo-footer">
                    </div>
                </div><!-- /.col-md-12 -->    
            </div><!-- /.row -->    

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="sidebar-inner-footer">
                        <div class="widget widget-infomation">
                            <ul class="flat-information">
                                <li class="email"><a href="mailto:AlitStudios@gmail.com">AlitStudios@gmail.com</a></li>  
                                <li class="phone"><a href="61383766284">+61 3 8376 6284</a></li>
                                <li class="address">121 King Street, Melbourne  Victoria 3000 Australia</li>
                                
                            </ul>
                        </div>
                    </div><!-- /.sidebar-inner-footer -->    
                </div><!-- /.col-md-12 -->    
            </div><!-- /.row -->    

            <div class="row"> 
                <div class="footer-widgets">
                    <div class="col-md-2">  
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Links</h4>
                            <ul>
                                <li><a href="#">ourses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Maintenance</a></li>
                            </ul>
                        </div><!-- /.widget -->      
                    </div><!-- /.col-md-2 --> 

                    <div class="col-md-2">  
                        <div class="widget widget_categories">
                            <h4 class="widget-title">SUPPORT</h4>
                            <ul>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div><!-- /.widget -->      
                    </div><!-- /.col-md-2 --> 

                    <div class="col-md-2">  
                        <div class="widget widget_categories">
                            <h4 class="widget-title">Our School</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Become a Teacher</a></li>
                                <li><a href="#">Our Teacher</a></li>
                            </ul>
                        </div><!-- /.widget -->      
                    </div><!-- /.col-md-2 --> 

                    <div class="col-md-6">
                        <div class="widget widget_mc4wp">
                            <div id="mc4wp-form-1" class="form mc4wp-form clearfix">
                                <form method="post">
                                    <p> <label>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</label></p>
                                    <p>
                                    <input type="email" name="EMAIL" placeholder="Your email address" required="">                                   
                                    <input type="submit" value="SUBSCRIBE">
                                    </p>
                               </form>
                            </div>
                        </div><!-- /.widget_mc4wp -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.footer-widgets -->
            </div><!-- /.row -->    
        </div><!-- /.container -->
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="line-top"></div>
                </div>
            </div>
            <div class="row">
                <div class="container-bottom">
                    <div class="col-md-6">
                        <div class="copyright"> 
                            <p>© Copyright <a href="#">Alitstudio</a> 2015. All Rights Reserved.
                            </p>
                        </div>                   
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <ul class="flat-socials text-right">
                            <li class="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>              
                    </div><!-- /.col-md-6 -->
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>   

    </div>
    
    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/imagesloaded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery-validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/switcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/smoothscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/main.js') }}"></script>

</body>
</html>