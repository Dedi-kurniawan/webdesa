@extends('layouts.master')
@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Post</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><i class="fa fa-list"></i> Form Post</h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
    <hr>

   {!! Form::model($role, ['route' => ['role.update', $role],'method'=>'PUT']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Role Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <h5><b>Assign Permissions</b></h5>
    @foreach ($permissions as $permission)
        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
    @endforeach
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
</div>
                </div>
              </div>
            </div>

          </div>
        </div>
@endsection