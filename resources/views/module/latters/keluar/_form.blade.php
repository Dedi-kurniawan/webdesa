
<div class="form-group {{ $errors->has('nosurat') ? 'has-error' : '' }}">
    {!! Form::label('nosurat','No Surat',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('nosurat', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('nosurat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
    {!! Form::label('tanggal','Tanggal terima',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::date('tanggal', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('tanggalsurat') ? 'has-error' : '' }}">
    {!! Form::label('tanggalsurat','Tanggal Surat',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::date('tanggalsurat', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('tanggalsurat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

		


{!! Form::hidden('jenissurat', 2, ['class' => 'form-control col-md-7 col-xs-12']) !!}



<div class="form-group {{ $errors->has('prihal') ? 'has-error' : '' }}">
    {!! Form::label('prihal','Perihal',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('prihal', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('prihal', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('pengirim') ? 'has-error' : '' }}">
    {!! Form::label('pengirim','Penerima',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('pengirim', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('pengirim', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('uraian') ? 'has-error' : '' }}">
    {!! Form::label('uraian','Uraian',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('uraian', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('uraian', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
	<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
		{!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
		{!! Form::submit(isset($data) ? 'Update' : 'Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>