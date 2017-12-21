@extends('layouts.master')
@section('content')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home<small>/ Agenda Desa</small></h3>
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
                    <h2>Agenda Desa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      @can('tambah_agenda')
                       <a href="{{ route('notes.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                      @endcan
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Agenda</th>
                          <th>Mulai</th>
                          <th>Selesai</th>
                          <th>Lokasi</th>                          
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      @foreach($notes as $not)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $not->TitleAdmin }}</td>
                          <td>{{ $not->StartAdmin }}</td>
                          <td>{{ $not->FinishAdmin }}</td>
                          <td>{{ $not->lokasi }}</td>
                          <td>
                            <a href="{{ url($not->ImageTumb) }}" target="blank" class="btn btn-success btn-xs"><i class="fa fa-file-photo-o"></i> Gambar</a>
                          </td>
                          <td>
                            {!! Form::open(['route' => ['notes.destroy', $not->id], 'method' => 'DELETE']) !!}
                            @can('edit_agenda')
                            <a href="{{ route ('notes.edit',$not->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            @endcan

                            @can('hapus_agenda')
                            <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                            </button>
                            @endcan

                            {!! Form::close() !!}
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

 