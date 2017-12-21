@extends('layouts.master')
@section('content')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home<small>/ perangkat Desa</small></h3>
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
                    <h2>Perangkat Desa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      @can('tambah_berita')
                       <a href="{{ route('perangkatdesa.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                      @endcan

                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Image</th>
                          <th>Facebook</th>
                          <th>Twitter</th>
                          <th>Instagram</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      @foreach($perangkat as $per)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $per->nama }}</td>
                          <td>{{ $per->jabatan }}</td>
                          <td>
                            <a href="{{ url($per->ImagePath) }}" target="blank" class="btn btn-success btn-xs"><i class="fa fa-file-photo-o"></i> Gambar</a>
                          </td>
                          <td><a href="{{ $per->facebook }}" target="blank" class="btn btn-primary btn-xs"><i class="fa fa-facebook"></i> Facebook</a>
                          </td>
                          <td><a href="{{$per->twiter }}" target="blank" class="btn btn-info btn-xs"><i class="fa fa-twitter"></i> Twitter</a>
                          </td>
                          <td><a href="{{ $per->instagram }}" target="blank" class="btn btn-default btn-xs"><i class="fa fa-instagram"></i> Instagram</a>
                          </td>
                          <td>
                            {!! Form::open(['route' => ['perangkatdesa.destroy', $per->id], 'method' => 'DELETE']) !!}
                            @can('edit_berita')
                            <a href="{{ route ('perangkatdesa.edit',$per->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            @endcan

                            @can('hapus_berita')
                            <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                            </button>
                            @endcan
                            
                            {!! Form::close() !!}
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    {{ $perangkat->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>              
@endsection

 