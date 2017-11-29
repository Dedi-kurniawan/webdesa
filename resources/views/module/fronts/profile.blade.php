@extends('layouts.front')
@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Visi & Misi</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>profile visi & misi</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

     <!-- Flat content box -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($visi as $vi)
                    <div class="thumb-content-box">
                        <img src="{{ $vi->ImagePath }}" alt="image">
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
                <div class="col-md-12">
                    <div class="content-box">
                       <center><h2 class="title"><a href="#">Visi</a></h2></center>
                        <div class="content">
                            {!! $vi->content !!}
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        @endforeach
    </section>


    <!-- Flat aquarius -->
    <section class="flat-row pad-top80px pad-bottom90px" style="background-color: #697ea4;">
        <div class="container">
            <div class="row">
                <div class="aquarius">
                    <h2>MISI</h2>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- About-us -->
    <section class="flat-row pad-bottom60px pad-top85px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us pad-top55px">
                        <h2 class="title-about-us">Misi <span>dari</span> Desa Sukajadi km.16</h2>
                        @foreach($misi as $mi)
                        <div class="desc">
                            <ul>
                                {!! $mi->content  !!}
                            </ul>
                        </div>
                    </div><!-- /.about-us -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image">
                        <img src="{{ $mi->ImagePath }}" alt="image">
                    </div><!-- /.about-us-img -->         
                    @endforeach               
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->    
@endsection