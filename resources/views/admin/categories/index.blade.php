@extends('admin.templates.main')

@section('title', 'Lista de Categorias')

@section('content')
	@include('flash::message')
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div>
		<a href="{{ route('categories.create') }}" class="pull-right btn btn-primary">Nueva Categoria</a>
	</div>

	<table class="table table-striped text-center">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>
					<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info" style="font-size: 9px"><i class="glyphicon glyphicon-pencil"></i></a>

					{!! Form::open([
						'method' => 'DELETE',
						'route' => ['categories.destroy', $category->id],
						'style' => 'display: inline'
					]) !!}
					<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarla?')">
						<i class="glyphicon glyphicon-remove" style="font-size: 9px"></i>
					</button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categories->render() !!}
@endsection