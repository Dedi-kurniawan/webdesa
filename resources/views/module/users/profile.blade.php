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
{!! Form::model($user, ['route' => ['profile.edit', $user],'method'=>'PUT']) !!}
  
<div class="form-group form-float {!! $errors->has('name') ? 'has-error' : '' !!}">
  <div class="form-line">
     {!! Form::label('name', 'name') !!}
     {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'name']) !!}
     {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
  </div>

<div class="form-group form-float {!! $errors->has('email') ? 'has-error' : '' !!}">
  <div class="form-line">
     {!! Form::label('email', 'email') !!}
     {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'email']) !!}
     {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
  </div>
<div class="form-group form-float {!! $errors->has('password') ? 'has-error' : '' !!}">
  <div class="form-line">
     {!! Form::label('password', 'password') !!}
     {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'password']) !!}
     {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
  </div>

<div class="form-group form-float {!! $errors->has('password') ? 'has-error' : '' !!}">
  <div class="form-line">
     {!! Form::label('password', 'Confirmation-password') !!}
     {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'confirmation-password']) !!}
     {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
  </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

              {!! Form::close() !!}
					     </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection