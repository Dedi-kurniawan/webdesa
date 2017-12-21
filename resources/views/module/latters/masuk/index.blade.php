@extends('layouts.master')
@section('content')  
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Home <small>/ Surat</small></h3>
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
                    <h2>Surat Masuk </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('suratmasuk.create') }}"><button class="btn btn-primary btn-md">Tambah</button></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  @include('module.latters.masuk.cetak')
                  <div class="x_content">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>No surat</th>
                          <th>Jenis Surat</th>
                          <th>Tanggal Surat</th>
                          <th>Tanggal Terima</th>
                          <th>Penerima</th>
                          <th>Perihal</th>
                          <th>Uraian</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no=1; ?>
                      @foreach($surat as $sur)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $sur->nosurat }}</td>
                          <td>{{ $sur->jenissurat }}</td>
                          <td>{{ $sur->Tanggalsurat }}</td>
                          <td>{{ $sur->tanggal }}</td>
                          <td>{{ $sur->pengirim }}</td>
                          <td>{{ $sur->prihal }}</td>
                          <td>{{ $sur->uraian }}</td>
                          <td>
                            {!! Form::open(['route' => ['suratmasuk.destroy', $sur->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route ('suratmasuk.edit',$sur->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <button type="submit"  class="btn btn-danger btn-xs" onclick="return confirm('Apakah kamu yakin ingin Menghapus data ini')" ><i class="fa fa-trash-o"></i> Hapus </a>
                            </button>
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

 