


<div class="form-group form-float {!! $errors->has('name') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('name', 'name') !!}
		 {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'permission']) !!}
		 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
	</div>
	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}



	 
                                