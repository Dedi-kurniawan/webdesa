@extends('layouts.master')
@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form User</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
          <h3><i class="fa fa-list"></i> Form User</h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
              {!! Form::model($user, ['route' => ['user.update', $user],'method'=>'PUT']) !!}
              @include('module.users._form', ['model'=> $user])
               {!! Form::close() !!}
					     </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection