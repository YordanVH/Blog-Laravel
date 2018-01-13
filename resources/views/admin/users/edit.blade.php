@extends('admin.templates.main')

@section('title', 'Editar Usuario '.$user->name)

@section('content')
	@if (count($errors) < 0)
	   <div class="alert alert-danger">
	       <strong>Upsss!</strong> Hay algunos problemas en tus datos.<br><br>
	       <ul>
	           @foreach ($errors->all() as $error)
	               <li>{{ $error }}</li>
	           @endforeach
	       </ul>
	   </div>
    @endif
	{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}
		@include('admin.users.form')
		<div class="form-group">
			{!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']) !!}
			<div class="pull-right">
				<a class="btn btn-danger" href="{{route('users.index')}}">Volver</a>
			</div>
		</div>
	{!! Form::close() !!} 

@endsection