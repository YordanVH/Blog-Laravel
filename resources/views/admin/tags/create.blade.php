@extends('admin.templates.main')

@section('title', 'Crear Tag')

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

	{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
		@include('admin.tags.form')
		<div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
			<div class="pull-right">
				<a class="btn btn-danger" href="{{route('tags.index')}}">Volver</a>
			</div>
		</div>
	{!! Form::close() !!}
@endsection