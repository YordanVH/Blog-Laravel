@extends('admin.templates.main')

@section('title', 'Editar Categoria')

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

    {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PATCH']) !!}
		@include('admin.categories.form')
		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
			<div class="pull-right">
				<a href="{{ route('categories.index') }}" class="btn btn-danger">Volver</a>
			</div>
		</div>
	{!! Form::close() !!}

@endsection