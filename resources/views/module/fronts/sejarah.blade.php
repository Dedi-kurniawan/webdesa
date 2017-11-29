@extends('layouts.front')
@section('content')      
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Sejarah Desa Sukajadi KM.16</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Profile</a></li>
                                <li>Sejarah</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <div class="flat-divider d55px"></div>

    <!-- About us style1 -->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="flat-about-us clearfix">
                    <div class="col-md-7">
                        @foreach($sejarah as $sej)
                        <div class="about-us-img clearfix">
                            <div class="v1">
                                <div class="overly-img"></div>  
                                <img src="{{ $sej->ImagePath }}" alt="image">
                            </div>
                            <div class="v2">
                                <div class="overly-img"></div>
                                <img src="{{ $sej->ImagePath }}" alt="image">
                            </div>
                            <div class="v3">
                                <div class="overly-img"> </div>  
                                <img src="{{ $sej->ImagePath }}" alt="image">
                            </div>                            
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-7 -->
                    
                    <div class="col-md-5">
                        <div class="about-us style1">
                            <h2 class="title-about-us">Sejarah kami</h2>
                            <div class="desc">
                               <p>{!! $sej->content !!}</p>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.flat-about-us -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
@endsection