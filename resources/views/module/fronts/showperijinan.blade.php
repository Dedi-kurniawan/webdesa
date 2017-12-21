@extends('layouts.front')
@section('content')

    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Layanan Desa Kependudukan</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Layanan Desa</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog single -->
    <section class="main-content blog-single">        
        <div class="post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article class="entry">
                            <div class="feature-post">
                                <img src="{{ $perijinanpost->ImageTumb }}" alt="image">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h2 class="title-post"><a href="#">{{ $perijinanpost->title }}</a></h2>
                                        <div class="meta-post clearfix">
                                        </div><!-- /.meta-post -->
                                        <div class="desc">
                                            <p>descripsion</p>
                                        </div>      
                                        <div class="entry-post">
                                            {!! $perijinanpost->content !!}
                                        </div><!-- /.entry-post -->
                                        <ul class="flat-socials">
                                            <li>
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
                                                fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                                <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                                            </li>
                                            <li>
                                                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="google-plus"><i class="fa fa-youtube-play"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div><!-- /.col-md-8 -->
                                </div><!-- /.row -->
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

            <div class="section-comment">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                             <div class="section-comment">                
                            <div class="comment-post">
                                <div class="comment-list-wrap">   
                                    <ul class="comment-list">
                                        <li>
                                            <article class="comment">
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
                                                fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-comments" data-numposts="10"></div>
                                            </article><!-- /.comment -->
                                        </li>
                                    </ul><!-- /.comment-list -->
                                </div><!-- /.comment-list-wrap -->

                        
                                    </ul><!-- /.comment-list -->
                                </div><!-- /.comment-list-wrap -->

                                <div id="respond" class="comment-respond">
                                    <h4 class="title comment-title">Add a review</h4>
                                    <form class="flat-contact-form" id="contactform5" method="post" action="./contact/contact-process.php">
                                        <div class="field clearfix">      
                                            <div class="wrap-type-input">                    
                                                <div class="input-wrap name">
                                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                                </div>
                                                <div class="input-wrap email">
                                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email-contact" required>
                                                </div> 
                                            </div>
                                            <div class="textarea-wrap">
                                                <textarea class="type-input" tabindex="3" placeholder="Your Review" name="message" id="message-contact" required></textarea>
                                            </div>
                                        </div>
                                        <div class="submit-wrap">
                                            <button>Submit</button>
                                        </div>
                                    </form><!-- /.comment-form -->
                                </div><!-- /#respond -->
                            </div><!-- /.comment-post -->
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.row -->                                               
                </div><!-- /.container -->
            </div><!-- /.section-comment -->
        </div><!-- /.post-wrap -->            
    </section>
   
@endsection