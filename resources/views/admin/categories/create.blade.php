@extends('admin.templates.main')

@section('title', 'Crear Categoria')

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

	{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
		@include('admin.categories.form')
		<div class="form-group">
			{!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}
			<div class="pull-right">
				<a class="btn btn-danger" href="{{route('categories.index')}}">Volver</a>
			</div>
		</div>
		
	{!! Form::close() !!} 

@endsection