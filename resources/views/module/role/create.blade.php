@extends('layouts.master')
@section('maincontent')
  <section class="content">
     <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Form Jurusan</h2>
                        </div>
                       		<div class="body">
               {!! Form::open(['route' => 'role.store']) !!}
                  @include('module.role._form')
               {!! Form::close() !!}
					    	</div>
                    </div>
                </div>
            </div>
      
     </div>
  </section>
@endsection
