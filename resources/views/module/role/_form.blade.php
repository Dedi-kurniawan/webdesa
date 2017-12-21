


<div class="form-group form-float {!! $errors->has('name') ? 'has-error' : '' !!}">
	<div class="form-line">
		 {!! Form::label('name', 'name') !!}
		 {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'permission']) !!}
		 {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
	</div>

<div class="form-group @if ($errors->has('permissions')) has-error @endif">
<div class="form-line">
    {!! Form::label('permissions[]', 'permissions') !!}
    {!! Form::select('permissions[]', $permission, isset($role) ? $role->permission->pluck('id')->toArray() : null,  ['class' => 'form-control', 'multiple']) !!}
    @if ($errors->has('permissions')) <p class="help-block">{{ $errors->first('permissions') }}</p> @endif
</div>
    </div>

		{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}



	 
                                