@extends('layouts.front')
@section('content')


      
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Welcome To Our Blog</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog/Content</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog single -->
    <section class="main-content blog-single blog-single-sidebar">
        <div class="post-wrap">        
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="entry">
                            <div class="feature-post">
                                <img src="{{ $post->ImageTumb }}" alt="image">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <h2 class="title-post"><a href="#">{{ $post->title }}</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">by {{ $post->user->name }}</a></span>
                                        </li>                                        
                                        <li class="post-date">{{ $post->created_at }}</li>
                                        <li class="post-categories">
                                            <a href="#">{{ $post->category->title }}</a>,
                                            <a href="#">Website</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->
                                <div class="desc">
                                    <p>descripsion</p>
                                </div>      
                                <div class="entry-post">
                                    {!! $post->content !!}
                                </div><!-- /.entry-post -->
                                <ul class="flat-socials">
                                    <li>
                                        <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
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
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->
                        <div class="section-comment">                
                            <div class="comment-post">
                                <div class="comment-list-wrap">   
                                    <ul class="comment-list">
                                        <li>
                                                <div id="fb-root"></div>
                                                <script>(function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                if (d.getElementById(id)) return;
                                                js = d.createElement(s); js.id = id;
                                                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
                                                fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-comments"></div>
                                        </li>
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
                        </div><!-- /.section-comment -->
                    </div><!-- /.col-md-9 -->
                    <div class="col-md-3">
                        <div class="sidebar">
                        <div class="widget widget-categories">
                            <h5 class="widget-title">Category Blog</h5>
                            <ul>
                               @foreach($categories as $category)
                               <li><a href="{{ route('blog', $category->slug) }}">{{ $category->title }}<span class="badge pull-right">{{ $category->posts->count() }}</span></a></li>
                               @endforeach                              
                            </ul>
                        </div><!-- /.widget .widget-categories -->
 
                        <div class="widget widget-recent-post">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul>
                                @foreach($recent as $rec)
                                <li><a href="{{ route('blogpost', $rec->slug) }}">{{ $rec->titleAdmin }} ...</a></li>
                                @endforeach
                            </ul>
                        </div><!-- /.widget .widget-recent-post -->

                        <div class="widget widget-tags">
                            <h5 class="widget-title">Tab</h5>
                            <div class="tag-list">
                                <a href="#">Design</a>
                                <a href="#">Branding</a>
                                <a href="#">Concept</a>
                                <a href="#">Website</a>
                                <a href="#">App</a> 
                                <a href="#">Photography</a>     
                            </div>
                        </div><!-- /.widget .widget-tags -->

                        <div class="widget widget-instagram">
                            <h5 class="widget-title">Halaman Facebook Kami </h5>
                            <div class="instagram-thumb clearfix">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2FDesa-Sukajadi-km16-1727744217533012%2F&tabs=timeline&width=340&height=162&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="162" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                            </div><!-- /.instagram-thumb -->
                        </div><!-- /.widget .widget-instagram -->

                        <div class="widget widget-recent-post style1">
                            <h5 class="widget-title">random posts</h5>
                            <ul class="post-news clearfix">
                                <li>
                                    <div class="thumb">
                                        <a href="#"><img src="images/blog/thumb1.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb2.png" alt="image"></a>
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p> 
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb3.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb4.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb5.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                            </ul><!-- /.post-news -->
                        </div><!-- /.widget .widget-recent-post style1 -->

                        <div class="widget widget-featured-post">
                            <h5 class="widget-title">Featured posts</h5>
                            <div class="widg-featured-post" data-item="1" data-nav="false" data-dots="true" data-auto="true">
                                <div class="item">
                                    <a href="#"><img src="images/blog/wdslide.png" alt="images"></a>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="images/blog/wdslide.png" alt="images"></a>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </div>                              
                            </div><!-- /.flat-client --> 
                        </div><!-- /.widget-featured-post -->

                        <div class="widget widget-tweets">
                            <h5 class="widget-title">Recent Twitter</h5>
                            <div class="list-tiwtter" data-number="2" data-username="envato" data-modpath="twitter/index.php"><p class="loading">Loading Tweets...</p></div>
                        </div><!-- /.widget -->

                        <div class="widget widget-subscribe">
                            <h5 class="widget-title-subscribe">Subscribe</h5>
                            <p>Subscribe to get the latest news</p>
                            <input type="text" placeholder="Enter your email address">
                            <a href="#" class="flat-button bg-theme">sign up</a>
                        </div><!-- /.widget .widget-sibscribe -->                        
                    </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container --> 
        </div><!-- /.post-wrap -->           
    </section>
@endsection