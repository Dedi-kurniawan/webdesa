<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title','Judul',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::text('title', null, ['class' => 'form-control col-md-7 col-xs-12']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

{!! Form::hidden('layanan', 1, ['class' => 'form-control col-md-7 col-xs-12']) !!}


<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
	{!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::file('image', ['class' => 'btn btn-default col-md-6 col-xs-12']) !!}
		{!! $errors->first('image', '<p class="help-block">:message</p>') !!}

		@if (isset($kependudukan) && $kependudukan->image !== '') 
				<div class="row">
    				<div class="col-md-6">
    					<br><br>
    					<div class="thumbnail">
							<img src="{{ url($kependudukan->ImagePath) }}" class="img-rounded"> 
						</div>
    				</div>
  				</div>
			@endif
	</div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
	{!! Form::label('content', 'Content', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::textarea('content', null, ['class'=>'form-control'])!!}
		{!! $errors->first('content', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
	<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
		{!! Form::reset('Reset', ['class' => 'btn btn-warning']) !!}
		{!! Form::submit(isset($data) ? 'Update' : 'Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>