@extends('admin.templates.main')

@section('title', 'Agregar articulo')

@section('content')
	{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}
		@include('admin.articles.form')
		{!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection