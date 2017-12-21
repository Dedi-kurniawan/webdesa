@extends('layouts.front')
@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Layanan Desa Kependudukan</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Layanan Desa</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->


    <!-- Flat courses -->
    <section class="flat-row pad-top50px pad-bottom90px">
        <div class="container">
            <div class="row">
                @foreach($kependudukan as $kep)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="{{ route('kependudukanpost', $kep->slug) }}"><img src="{{ $kep->ImagePath }}" alt="image"></a>
                            <a class="courses-viewmore" href="{{ route('kependudukanpost', $kep->slug) }}">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="{{ route('kependudukanpost', $kep->slug) }}"><h6 class="courses-topic">{{ strip_tags(substr($kep->title,0,23)) }}...</h6></a>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d40px"></div>
            </div>
                <center>{{ $kependudukan->links() }}</center>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
   
  @endsection