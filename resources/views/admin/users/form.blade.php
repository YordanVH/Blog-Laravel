		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',  (empty($user) ? null : $user->name), ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => 'required']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', (empty($user) ? null : $user->email), ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required' => 'required']) !!}
		</div>
		@if(empty($user))
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '***********', 'required' => 'required']) !!}
		</div>
		@endif

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['' => 'Seleccione un tipo', 'member' => 'Miembro', 'admin' => 'Administrador'], (empty($user) ? null : $user->type), ['class' => 'form-control']) !!}
		</div>

		