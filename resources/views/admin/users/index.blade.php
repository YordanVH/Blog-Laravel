@extends('admin.templates.main')

@section('title', 'Usuarios')

@section('content')
	@include('flash::message')
	@if (session('status'))
	    <div class="alert alert-success">
	        {{ session('status') }}
	    </div>
	@endif
	<div><a href="{{ route('users.create') }}" class="pull-right btn btn-info">Nuevo Usuario</a></div>
	<table class="table table-striped text-center">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == 'admin')
							<span class="label label-danger">{{ $user->type }}</span>
						@else
							<span class="label label-primary">{{ $user->type }}</span>
						@endif
					</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}" style="font-size: 9px" class="btn btn-info"><i  class="glyphicon glyphicon-pencil"></i></a>
						{!! Form::open(
						 	['method' => 'DELETE',
						 	 'route' => ['users.destroy', $user->id],
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
	{!! $users->render() !!}
@endsection

