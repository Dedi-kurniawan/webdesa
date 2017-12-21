


<div class="form-group form-float {!! $errors->has('name') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('name', 'name') !!}
		 {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'name']) !!}
		 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('email') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('email', 'email') !!}
		 {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'email']) !!}
		 {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
	</div>
<div class="form-group form-float {!! $errors->has('password') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('password', 'password') !!}
		 {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'password']) !!}
		 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group form-float {!! $errors->has('password') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('password', 'Confirmation-password') !!}
		 {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'confirmation-password']) !!}
		 {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
	</div>
                    
<div class="form-group @if ($errors->has('roles')) has-error @endif">
  	<div class="form-line">
    {!! Form::label('roles[]', 'Roles') !!}
    {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control']) !!}
    @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
</div>
    </div>
	
		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}



	 
                                