@extends('layouts.master')
@section('content')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home<small>/ User</small></h3>
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
                    <h2>User</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <a href=" {{ route('user.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                         </tr>
                     </thead>
                      <?php $no=1; ?>
                       @foreach($user as $us)
                         <tbody>
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->roles->implode('name', ', ') }}</td>
                            <td>
                            {!! Form::open(['route' => ['user.destroy', $us->id], 'method' => 'DELETE']) !!}
                              <a href=" {{ route ('user.edit',$us->id) }}"><button type="button" class="btn bg-blue waves-effect"><i class="material-icons">edit</i></button></a>
                              <button type="submit"  class="btn bg-red waves-effect" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="material-icons">delete</i></button>             
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      </tbody>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>              
@endsection
 