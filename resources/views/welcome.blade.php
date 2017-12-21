@extends('layouts.front')
@section('content')
        <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                @foreach($bannersatu as $bansu)
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{ $bansu->ImagePath }}" alt="slider-image" />

                    <div class="tp-caption sfb title-slide color-white style1" data-x="15" data-y="254" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">{!! $bansu->title !!}</div>

                    <div class="tp-caption sft desc-slide color-white" data-x="15" data-y="398" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                   {!! $bansu->content !!}</div>

                    <div class="tp-caption sft center color-white flat-button-slide" data-x="15" data-y="528" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                        <a href="#">Visi dan Misi</a>
                    </div>
                </li>
                @endforeach
                @foreach($bannerdua as $bandu)
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{ $bandu->ImagePath }}" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="379" data-y="245" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        <font color="white">{!! $bandu->title !!}</font>
                    </div>
                    <center>  
                    <div class="tp-caption sfr desc-slide center" data-x="306" data-y="322" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                    <font color="white">{!! $bandu->content !!}</font>
                    </div>                            
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Flat iconbox left -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                @foreach($kegiatan as $keg)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-iconbox">
                        <div class="icon-image">
                            <img src="{{ $keg->ImagePath  }}" alt="image">
                        </div>
                        <div class="content">
                            <h7 class="title"><a href="{{ route('blogpost', $keg->slug) }}">{!! substr($keg->title,0,25) !!}</a></h7>            
                            <p>{!! strip_tags(substr($keg->content,0,50)) !!}...</p> 
                        </div>
                        <a href="{{ route('blogpost', $keg->slug) }}" class="readmore">Read more</a>
                    </div><!-- /.flat-iconbox -->
                </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Flat fillter courses -->
    <section class="flat-row pad-top95px parallax parallax3 bg-black">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section cl-white">
                        <h1 class="title">Cari Judul Blog Desa</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin<br> turpis egestas! Mauris dapibus sed integer placerat, scelerisque!</p>
                        </div>
                    </div><!-- /.title-section -->

                    <div class="row">
                        <div class="flat-divider d50px"></div>
                    </div>
                    
                    <!-- Fillter courses -->
                    <form class="flat-contact-form fillter-courses border-radius border-white text-center" id="contactform5" method="post" action="./contact/contact-process.php">
                        <div class="field clearfix">      
                            <div class="wrap-type-input">
                                <div class="wrap courses-level">
                                    <select class="select-field courses-level" name="appointment_services">
                                        <option value="" selected="selected">Courses level</option>
                                        <option value="Level 1">Level 1</option>
                                        <option value="Level 2">Level 2</option>
                                        <option value="Level 3">Level 3</option>
                                    </select> 
                                </div><!-- /.wrap-select -->
                                
                                <div class="wrap courses-keyword">
                                    <input type="text" value="" placeholder="Courses keyword" name="subject" id="subject" >
                                </div>

                                <div class="wrap all-categories">
                                    <button>All categories</button>
                                </div>  
                            </div><!-- /.wrap-type-input -->                            
                        </div><!-- /.field -->                        
                    </form><!-- /.comment-form -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->       

    </section>

    <!-- Flat courses -->
    <section class="flat-row pad-top95px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2">
                        <h1 class="title">Berita Terkini Desa Sukajadi <br><h3>Kec.Pujud Kab.Rokan Hilir</h3></h1>
                        <div class="desc">
                            <p>Menyajikan semua berita terkini tentang desa</p>
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d60px"></div>
            </div>
            <div class="row">
                @foreach($berita as $ber)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses style1">
                        <div class="courses-thumbnail">
                            <a href="{{ route('blogpost', $ber->slug) }}"><img src="{{ $ber->ImagePath}}" alt="{{ $ber->TitleAdmin }}"></a>
                            <div class="courses-description">
                                <p class="desc">{!! $ber->title !!}...</p>
                            </div> 
                            <a class="courses-viewmore" href="{{ route('blogpost', $ber->slug) }}">Read more</a>
                        </div>
                        <div class="courses-content">
                            <a href="{{ route('blogpost', $ber->slug) }}"><h6 class="courses-topic">{{ $ber->TitleAdmin }}</h6></a>
                        </div>
                        <ul class="courses-meta">
                            <li class="courses-author"><a href="#">{{ $ber->user->name }}</a></li>
                            <li class="courses-follow"><a href="#">100</a></li>
                            <li class="courses-comment"><a href="#">5</a></li>
                        </ul>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <!-- Flat gallery -->
    <section class="flat-row pad-top0px pad-bottom0px">
        <div class="flat-gallery-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="true">
             @foreach($berita as $ber)
            <div class="item">
                <a class="popup-gallery" href="{{ $ber->ImageTumb }}"><img src="{{ $ber->ImagePath }}" alt="image"></a>
            </div>
            @endforeach
        </div><!-- /.flat-gallery-carousel -->
    </section> 

    <!-- Flat iconbox left style1 -->
    <section class="flat-row pad-bottom85px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-image style1">
                        <img src="{{ asset('front/images/about/about4.png') }}" alt="image">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="about-us">
                        <h2 class="title-about-us">Layanan Desa</h2>
                        <div class="desc">
                            <p>Mempermudah segala urusan masyarakat dengan Desa</p>                           
                        </div>
                    </div><!-- /.about-us -->

                    <div class="flat-divider d30px"></div>

                    <div class="row">
                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Board"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Pengurusan E-KTP</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-ms-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Notepad"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Pengurusan Surat Tanah</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- About-us -->
    <section class="flat-row pad-bottom60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us">
                        <h2 class="title-about-us">Manfaat <span>WEB</span> Desa</h2>
                        <div class="desc">
                            <p>Adapun Manfaat web desa sebagai berikut :</p>
                            <ul>
                                <li>Meningkatkan promosi Desa</li>
                                <li>Memberikan transparasi mengenai kegiatan desa</li>
                                <li>Meningkatkan SDM Perangkat Desa</li>
                                <li>Meningkatkan Penyampaian Informasi yang ada di Desa</li>
                            </ul>
                        </div>
                    </div><!-- /.about-us -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image">
                        <img src="{{ asset('front/images/about/about5.png') }}" alt="image">
                    </div><!-- /.about-us-img -->                        
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <!-- Flat event style1-->
    <section class="flat-row pad-bottom45px parallax parallax7 bg-black bg-p7">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style4">
                        <h1 class="title">AGENDA DESA</h1>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d20px"></div>
            <div class="row">
            @foreach($agenda as $ag)
                <div class="col-md-6">
                    <div class="flat-event style1">
                        <div class="time-event">
                            <div class="time-from">
                                <div class="date">{{ $ag->Tanggal }}</div>
                                <div class="month">{{ $ag->Bulan }}</div>
                            </div>
                        </div><!-- /.time-event -->

                        <div class="event-wrapper">
                            <h5 class="title"><a href="{{ route('agendapost', $ag->slug) }}">{{ $ag->title }}</a></h5>
                            <div class="meta">                                
                                <div class="location">{{ $ag->lokasi }}</div>
                                <div class="content">
                                  {!! substr($ag->content,0,100) !!}
                                </div>
                            </div>
                        </div><!-- /.event-wrapper -->                            
                    </div><!-- /.flat-event -->
                </div><!-- /.col-md-6 -->
            @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <div class="view-event" style="background-color: #000; text-align: center;">
        <a href="{{ route('agenda') }}">Semua Agenda</a>
    </div>

    <!-- Testimonials style1 -->
    <section class="flat-row pad-bottom95px">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img src="{{ asset('images/photo.jpeg') }}" alt="image">
                    </div>
                </div><!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-us">
                                <h2 class="title-about-us">KEPALA DESA</h2>
                            </div><!-- /.about-us -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="flat-divider d15px"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonials-flexslides flat-testimonials-flex">
                                <ul class="slides">
                                    <li>
                                        <p class="say">Mewujudakan masyarakat yang damai dan sejahtera adalah tujuan utama kami</p>
                                        <span class="name">Nama kepala Desa , </span>
                                        <span class="position">Kepala Penghulu</span>
                                    </li>
                                </ul>
                            </div><!-- /.testimonials-flexslides -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Blog -->
    <section class="flat-row main-content blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2">
                        <h1 class="title">BERITA TERPOPULER DESA SUKAJADI KM.16</h1>
                        <div class="desc">
                            <p>Menyajikan semua informasi tentang desa mulai dari Kegiatan Desa, Agenda Desa. <br>Demi mewujudkan Desa yang sejahtera dan transparan semua kegiatan Desa </p>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d50px"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach($populerkiri as $popki)  
                        
                        <article class="entry clearfix images-left">                       
                            <div class="feature-post">
                                <a href="{{ route('blogpost', $popki->slug) }}"><img src="{{ $popki->ImageTumb }}" alt="image"></a>
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="title-post"><a href="{{ route('blogpost', $popki->slug) }}">{{ $popki->title }}</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By {{ $popki->user->name }}</a></span>
                                        </li>                                        
                                        <li class="post-date">{{ $popki->created_at }}</li>
                                        <li class="post-categories">
                                            <a href="#">{{ $popki->category->title }}</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p>{!! strip_tags(substr($popki->content,0,50)) !!}...<a class="read-more" href="{{ route('blogpost', $popki->slug) }}">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post -->                            
                        </article><!-- /.entry -->
                        @endforeach
                        @foreach($populerkanan as $popka) 
                        <article class="entry clearfix images-right">
                            <div class="main-post">
                                <h2 class="title-post"><a href="{{ route('blogpost', $popka->slug) }}">{{ $popka->title }}</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By {{ $popka->user->name }}</a></span>
                                        </li>                                        
                                        <li class="post-date">{{ $popka->created_at }}</li>
                                        <li class="post-categories">
                                            <a href="#">{{ $popka->category->title }}</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    {!! substr($popka->content,0,250) !!}...<a class="read-more" href="{{ route('blogpost', $popka->slug) }}">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post --> 

                            <div class="feature-post">
                                <a href="{{ route('blogpost', $popka->slug) }}"><img src="{{ $popka->ImageTumb }}" alt="image"></a>
                            </div><!-- /.feature-post -->                           
                        </article><!-- /.entry -->
                        @endforeach
                    </div><!-- /.post-wrap -->    
                    <div class="load-more">
                        <a class="flat-button" href="#">Selengkapnya..</a>
                    </div>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="flat-divider d85px"></div>

    <!-- Flat contact -->
    <section class="flat-row bg-contact pad-top375px pad-bottom360px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-contactform-home1">
                        <form class="flat-contact-form border-radius field-large text-large" id="contactform6" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                    
                                    <div class="input-wrap name">
                                        <input type="text" value="" tabindex="1" placeholder="Your name" name="name" id="name" required>
                                    </div>
                                    <div class="input-wrap email">
                                        <input type="email" value="" tabindex="2" placeholder="Your email" name="email" id="email-contact" required>
                                    </div>
                                    <div class="input-wrap last Subject">
                                        <input type="text" value="" placeholder="Subject" name="subject" id="subject-2" >
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
 @endsection