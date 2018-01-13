@extends('admin.templates.main')

@section('title', 'Editar etiqueta')

@section('content')
	

	{!!Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PATCH']) !!}
		@include('admin.tags.form')
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection