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
                    <h2>Post</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <a href="{{ route('post.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>title</th>
                          <th>content</th>
                          <th>category</th>
                          <th>Image</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      @foreach($posts as $pos)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $pos->titleAdmin }}</td>
                           <td>{{ $pos->ContentAdmin }}</td>
                           <td>{{ $pos->category->title }}</td>
                          <td>
                            <a href="{{ url($pos->ImagePath) }}" target="blank" class="btn btn-success btn-xs"><i class="fa fa-file-photo-o"></i> Gambar</a>
                          </td>
                          <td>{{ $pos->CreatedAt }}</td>
                          <td>
                            {!! Form::open(['route' => ['post.destroy', $pos->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route ('post.edit',$pos->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                            </button>
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $posts->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>              

@endsection

 