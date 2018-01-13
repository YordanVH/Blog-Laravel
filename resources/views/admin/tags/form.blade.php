<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', (empty($tag) ? null : $tag->name), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required']) !!}
</div>