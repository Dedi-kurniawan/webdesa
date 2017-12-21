@extends('layouts.master')
@section('content')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small><i class="fa fa-home"></i></small>&nbsp;Home<small>/ Banner Desa</small></h3>
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
                    <h2>Banner Desa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      @can('tambah_banner')
                       <a href="{{ route('banner.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                      @endcan
                      
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
                          <th>status</th>
                          <th>Image</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      @foreach($banner as $ben)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{!! substr($ben->title,0,20) !!}</td>
                          <td>{!! substr($ben->content,0,39) !!}</td>
                          <td>{{ $ben->StatusAdmin }}</td>
                          <td>
                            <a href="{{ url($ben->ImagePath) }}" target="blank" class="btn btn-success btn-xs"><i class="fa fa-file-photo-o"></i> Gambar</a>
                          </td>
                          <td>{{ $ben->created_at }}</td>
                          <td>
                            {!! Form::open(['route' => ['banner.destroy', $ben->id], 'method' => 'DELETE']) !!}
                            @can('edit_banner')
                            <a href="{{ route ('banner.edit',$ben->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            @endcan

                            @can('hapus_banner')
                            <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                            </button>
                            @endcan
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $banner->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>              

@endsection

 