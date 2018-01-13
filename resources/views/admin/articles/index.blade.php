@extends('admin.templates.main')

@section('title', 'Lista de Articulos')

@section('content')
	@include('flash::message')
	<div>
		<a href="{{ route('articles.create') }}" class="pull-right btn btn-primary">Nuevo Articulo</a>
	</div>
	<table class="table table-striped text-center table-responsive table-hover table-condensed">
		<thead>
			<th>Id</th>
			<th>Título</th>
			<th>Autor</th>
			<th>Categoria</th>
			<th>Fecha de Publicación</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td> {!! $article->id !!} </td>
				<td> {!! $article->title !!} </td>
				<td> {!! $article->user->name !!} </td>
				<td> {!! $article->category->name !!} </td>
				<td> {!! $article->created_at !!} </td>
				<td>
					<a href="{{ route('articles.show', $article->id) }}" class="btn btn-success"> <span style="font-size: 9px" class="glyphicon glyphicon-eye-open"></span> </a>

					<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info"> <span class="glyphicon glyphicon-pencil" style="font-size: 9px"></span> </a>

					{!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE']) !!}
						<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminarlo?')"><i class="glyphicon glyphicon-remove" style="font-size: 9px"></i></button>
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection