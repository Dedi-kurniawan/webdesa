@extends('layouts.master')
@section('content')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home<small>/ Post</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Role</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>role</th>
                                            <th>Permision</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <?php $no=1; ?>
                                     @foreach($roles as $role)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $role->name }}</td>
                                            @if($role->id == 1)
                                            <td><a href="#" class="btn btn-success btn-xs"> ALL </a></td>
                                            @else
                                            <td>{{ str_replace(array('[',']','"',''),'', $role->permissions()->pluck('name')) }}</a></td>
                                            @endif
                                            <td>
                                            @if($role->id == 1)
                                            -
                                            @else
                                            <a href=" {{ route ('role.edit',$role->id) }}"><button type="button" class="btn bg-blue waves-effect">
                                            <i class="material-icons">edit</i>
                                            </button></a>  
                                            @endif     
                                            </td>
                                        </tr>                                       
                                    </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>              
@endsection
