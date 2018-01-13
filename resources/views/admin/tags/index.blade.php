@extends('admin.templates.main')

@section('title', 'Lista de Etiquetas')

@section('content')
	@include('flash::message')
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif

	<div><a href="{{ route('tags.create') }}" class="pull-left btn btn-info">Nueva Etiqueta</a></div>

	<!-- Buscador de Tags -->
		{!! Form::open(['route' => 'tags.index', 'method' => 'get', 'class' => 'navbaar-form pull-right']) !!}
			<div class="input-group">
				{!! form::text('name', null, ['class' => 'form-control', 'palceholder' => 'Buscar etiqueta', 'ariadescribedby' => 'search']) !!}
				<span class="input-group-addon glyphicon glyphicon-search" id="search"></span>
			</div>
		{!! Form::close() !!}
	<!-- Fin de buscador -->

	<table class="table table-striped">
		<thead class="text-center">
			<th>Id</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody class="text-center">
			@foreach ($tags as $tag)
			<tr>
				<td>{!! $tag->id !!}</td>
				<td>{!! $tag->name !!}</td>
				<td>
					<a href="{{ route('tags.edit', $tag->id) }}" style="font-size: 9px" class="btn btn-info"><i  class="glyphicon glyphicon-pencil"></i></a>
						{!! Form::open(
						 	['method' => 'DELETE',
						 	 'route' => ['tags.destroy', $tag->id],
						 	 'style'=>'display:inline'
						 	 ]) !!}
						<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarlo?')">
  							 <i class="glyphicon glyphicon-remove" style="font-size: 9px"></i>
 						</button>
 						{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection