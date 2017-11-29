@extends('layouts.front')
@section('content')  
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">SELAMAT DATANG DI BLOG KAMI</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 




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
                @foreach($blog as $blo)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses style1">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="{{ $blo->ImagePath}}" alt="image"></a>
                            <div class="courses-description">
                                <p class="desc">{!! substr($blo->content,0,100) !!}...</p>
                            </div> 
                            <a class="courses-viewmore" href="course_single.html">Read more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">{{ $blo->TitleAdmin }}</h6></a>
                        </div>
                            <ul>
                               <li class="fa fa-pencil-square-o">&nbsp;<a href="#">{{ $blo->created_at }}</a></li>
                               <li class="fa fa-user">&nbsp; <a href="#">{{ $blo->user->name }}</a></li>
                            </ul>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <!-- Blog fullwidth -->
    <section class="main-content blog-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
                        {{ $blog->links() }}                      
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection