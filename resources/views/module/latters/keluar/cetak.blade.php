          {!! Form::open(array('route' => 'suratkeluar.export', 'class' => 'form-vertical form-label-left', 'method' => 'POST')) !!}

                      <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                          <div class="col-md-2 col-sm-6 col-xs-12">
                             {!! Form::selectMonth('bulan',null, ['placeholder' => '--Bulan--', 'class' => 'form-control col-md-7 col-xs-12']) !!}
                            </div>
                      </div>
                      <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                          <div class="col-md-2 col-sm-6 col-xs-12">
                            {!! Form::select('tahun', ['2017' => '2017', '2018' => '2018', '2019' => '2019', '2020' => '2020', '2021' => '2021', '2022' => '2022'],null, ['placeholder' => '--Tahun--', 'class' => 'form-control col-md-7 col-xs-12']) !!}
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-2 col-sm-2 col-xs-3">
                       {!! Form::submit(isset($tanggal) ? 'Dowload' : 'Dowload', ['class' => 'btn btn-success']) !!}
                          </div>
                      </div>
          {!! Form::close() !!}

