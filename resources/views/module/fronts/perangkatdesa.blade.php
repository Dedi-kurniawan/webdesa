@extends('layouts.front')
@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Perangkat Desa Sukajadi KM.16</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>perangkat desa</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Team member style3 -->
    <section class="flat-row pad-top95px pad-bottom40px" style="background-color: #eef1f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2">
                        <h1 class="title">Perangkat Desa</h1>
                        <div class="desc">
                            <p>Perangkat Desa bertugas membantu Kepala Desa dalam melaksanakan tugas dan wewenangnya. Perangkat Desa terdiri dari :</p>
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d60px"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="flat-grid margin55px">
                        @foreach($perangkat as $pera)
                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="{{ asset($pera->ImagePath) }}" alt="image" style="border-radius: 150px; width: 203px; height: 203;">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="{{ $pera->facebook }}"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="{{ $pera->twitter }}"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="{{ $pera->instagram }}"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">{{ $pera->nama }}</p>
                                        <p class="position">{{ $pera->jabatan }}</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four --> 
                        @endforeach                     
                    </div><!-- /.flat-grid -->                    
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection