@extends('layouts.master')

@section('content')
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-envelope"></i> Total Surat Masuk</span>
              <div class="count">200</div>
              <span class="count_bottom"><i class="green"> Surat</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-envelope"></i> Total Surat Keluar</span>
              <div class="count">230</div>
              <span class="count_bottom"><i class="green"> Surat </i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-envelope"></i> Total Surat</span>
              <div class="count">1,019</div>
              <span class="count_bottom"><i class="green"> Dokument</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-file-text"></i> Total Blog</span>
              <div class="count">300</div>
             <span class="count_bottom"><i class="green"> Post</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-calendar-check-o"></i> Total Agenda</span>
              <div class="count">321</div>
              <span class="count_bottom"><i class="green"> Agenda</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total User</span>
              <div class="count">22</div>
              <span class="count_bottom"><i class="green"> User</i></span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Daily -->
              <div class="x_panel">
                <div class="x_title">
                  <h2>Informasi <small>Cara Penggunaan Aplikasi Desa </small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <ul class="list-unstyled timeline">
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Pertama</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                            <a>Setelah anda login, masuk ke menu masing-masing</a>
                          </h2>
                          <p class="excerpt">   
                            After Login, Go to the menu based 
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Kedua</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                            <a>Pilih Tambah Untuk mengupload data, isi Form sesuai dengan yang di inginkan</a>
                          </h2>
                          <p class="excerpt">
                            Select Word or Excel Sub Menu To upload according to the data you want to upload
                          </p>                  
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Ketiga</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                            <a>Pilih Edit Untuk mengganti data yang  upload, ganti isi form sesuai yang di inginkan</a>
                          </h2>
                          <p class="excerpt">
                            Fill in the data in the column in accordance with the data of each department's tasks
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="block">
                        <div class="tags">
                          <a href="" class="tag">
                            <span>Keempat</span>
                          </a>
                        </div>
                        <div class="block_content">
                          <h2 class="title">
                            <a>Pilih  Hapus sesuai dengan colom yang ingin di hapus</a>
                          </h2>
                          <p class="excerpt">
                            Fill in the data in the column in accordance with the data of each department's tasks
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
              </div>
            </div>
            <!-- daily end -->
            </div>
          </div>
        </div>
@endsection
