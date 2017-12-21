@extends('layouts.front')
@section('content')  
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Agenda Desa</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Agenda</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Fillter courses -->
    <section class="flat-row pad-top50px pad-bottom0px">
        <div class="container">
            <div class="row">
                <div class="search-course">
                    <div class="col-md-10">
                        <!-- Fillter courses -->
                        <form class="flat-contact-form fillter-courses border-radius border-white text-center style1" id="contactform5" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                                    
                                    <div class="wrap courses-keyword">
                                        <input type="text" value="" placeholder="Cari Agenda" name="subject" id="subject" >
                                    </div>

                                    <div class="wrap all-categories">
                                        <button>Cari</button>
                                    </div>  
                                </div><!-- /.wrap-type-input -->                            
                            </div><!-- /.field -->                        
                        </form><!-- /.comment-form -->  
                    </div><!-- /.col-md-10 -->

                    <div class="col-md-2">
                        <div class="list-course">
                            <a href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-list" aria-hidden="true"></i></a>                        
                        </div>
                    </div><!-- /.colo-md-2 -->
                </div><!-- /.search-course -->
            </div><!-- /.row -->
        </div><!-- /.container -->        
    </section>

    <!-- Flat courses list -->
    <section class="flat-row pad-top50px pad-bottom50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="course-list">
                        <ul>
                            @foreach($agenda as $age)
                            <li>
                                <div class="thumb">
                                    <a href="{{ route('agendapost', $age->slug) }}"><img src="{{ $age->ImagePath }}" alt="image"></a>
                                </div>
                                <div class="list-content">
                                    <div class="courses-content">
                                        <h6 class="courses-topic"><a href="{{ route('agendapost', $age->slug) }}">{{ $age->title }}</a></h6>
                                    </div>
                                    <ul>
                                        <li class="fa fa-calendar">&nbsp;<a href="#">{{ $age->StartAdmin }}</a></li>
                                        <li class="fa fa-minus">&nbsp;</li>
                                        <li class="fa fa-calendar">&nbsp; <a href="#">{{ $age->FinishAdmin }}</a></li>
                                        <li class="fa fa-location-arrow">&nbsp; <a href="#">{{ $age->lokasi }}</a></li>
                                    </ul>
                                    <div class="content">
                                      {!! substr($age->content,0,250) !!}
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
                        {{ $agenda->links() }}                                                          
                    </div><!-- /.blog-pagination -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
@endsection