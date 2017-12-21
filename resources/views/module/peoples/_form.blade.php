<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
    {!! Form::label('nama','Nama',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('nama', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('jabatan') ? 'has-error' : '' }}">
    {!! Form::label('jabatan','Jabatan',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('jabatan', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
    {!! Form::label('facebook','Facebook',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::url('facebook', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('twiter') ? 'has-error' : '' }}">
    {!! Form::label('twiter','Twiter',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::url('twiter', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('twiter', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
    {!! Form::label('instagram','Instagram',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('instagram', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('instagram', '<p class="help-block">:message</p>') !!}
	</div>
</div>



<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
	{!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::file('image', ['class' => 'btn btn-default col-md-6 col-xs-12']) !!}
		{!! $errors->first('image', '<p class="help-block">:message</p>') !!}

		@if (isset($perangkat) && $perangkat->image !== '') 
				<div class="row">
    				<div class="col-md-6">
    					<br><br>
    					<div class="thumbnail">
							<img src="{{ url($perangkat->ImagePath) }}" class="img-rounded"> 
						</div>
    				</div>
  				</div>
			@endif
	</div>
</div>


{!! Form::hidden('user_id', Auth::user()->id) !!}

<div class="ln_solid"></div>
<div class="form-group">
	<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
		{!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
		{!! Form::submit(isset($data) ? 'Update' : 'Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>