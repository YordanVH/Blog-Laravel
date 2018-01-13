	<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',  (empty($category) ? null : $category->name), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required']) !!}
	</div>