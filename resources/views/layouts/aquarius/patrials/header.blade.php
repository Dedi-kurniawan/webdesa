
    <!-- Boxed -->
    <div class="boxed">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="language">        
                        <ul class="flat-information">
                            <li class="email"><a href="mailto:AlitStudios@gmail.com">desasukajadi@gmail.com</a></li>
                            <li class="phone"><a href="61383766284">+61 3 8376 6284</a></li>
                            {{-- <li class="current"><a href="#">English</a>
                                <ul>  
                                    <li class="en"><a href="#">English</a></li>
                                    <li class="ge"><a href="#">German</a></li>
                                    <li class="pl"><a href="#">Polish</a></li>
                                    <li class="ru"><a href="#">Russian</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div><!-- /.language -->
                </div><!-- /.col-md-6 -->   
                <div class="col-md-6">
                    <div class="top-navigator">
                        <ul>
                            {{-- <li><a href="#">Register</a></li> --}}
                            <li><a href="{{ '/login' }}">Login</a></li>
                        </ul>
                    </div><!-- /.top-navigator --> 
                </div><!-- /.col-md-6 -->              
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->

    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <div class="header-wrap clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="logo" class="logo">
                            <a href="index.html" rel="home">
                                <img src="{{ asset('front/images/logo.png') }}" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-10">
                        <div class="nav-wrap">
                            
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu"> 
                                    <li class="home">
                                    <a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="#">Profile Desa</a>
                                        <ul class="submenu right-sub-menu"> 
                                            <li ><a href="{{ url('/profile/visi-misi') }}">Visi Dan Misi</a></li>
                                            <li ><a href="{{ url('/profile/sejarah') }}">Sejarah</a></li>
                                            <li ><a href="{{ url('/perangkatdesa') }}">Perangkat Desa</a></li>  
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="blog.html">Blog Desa</a>
                                        <ul class="submenu right-sub-menu"> 
                                            @foreach($categories as $men)
                                            <li><a href="{{ url('/blog') }}">{{ $men->title }}</a></li>
                                            @endforeach       
                                        </ul><!-- /.submenu -->
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul class="submenu right-sub-menu">
                                            <li><a href="gallery_v1.html">Gallery 01</a></li>
                                            <li><a href="gallery_v2.html">Gallery 02</a></li>
                                        </ul><!-- /.submenu -->
                                    </li>                                                
                                    <li><a href="{{ url('/agendadesa') }}">Agenda</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->  
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.col-md-10 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

            <div class="show-search">
                <a href="#"><i class="fa fa-search"></i></a>                
            </div><!-- /.show-search -->

            <div class="nav-search">
                <div class="container"> 
                    <div class="col-md-12">
                       <div class="top-search" id="s1">
                            <aside id="search-4" class="widget widget_search">
                                <form role="search" method="get" class="search-form">
                                    <label>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </aside>                    
                        </div><!-- /.top-search -->
                    </div>
                </div>
            </div><!-- /.nav-search -->             
        </div><!-- /.header-inner --> 
    </header><!-- /.header -->
