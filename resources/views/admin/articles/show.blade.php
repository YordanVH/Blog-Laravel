@extends('admin.templates.main')

@section('title')
	{!! $article->title !!} <br>
	{!! $article->user_id !!} | {!! $article->category_id !!} | {!! $article->created_at !!}
@endsection

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">{!! $article->title !!}</div>
  <div class="panel-body">
    {!! $article->user_id !!} | {!! $article->category_id !!} | {!! $article->created_at !!}
  </div>
</div>

	<div class="col-md-6">
		<ul class="list-group">
			<li class="list-group-item text-right">
		      <span class="pull-left">
		        <strong class="">Id</strong>
		      </span>
		      <td>{!! $article->id !!}</td>
    		</li>

    		<li class="list-group-item text-right">
		      <span class="pull-left">
		        <strong class="">Título</strong>
		      </span>
		      <td>{!! $article->title !!}</td>
    		</li>

    		<li class="list-group-item text-right">
		      <span class="pull-left">
		        <strong class="">Contenido</strong>
		      </span>
		      <td>{!! $article->content !!}</td>
    		</li>

    		<li class="list-group-item text-right">
		      <span class="pull-left">
		        <strong class="">Autor</strong>
		      </span>
		      <td>{!! $article->user_id !!}</td>
    		</li>

    		<li class="list-group-item text-right">
		      <span class="pull-left">
		        <strong class="">Categoria</strong>
		      </span>
		      <td>{!! $article->category_id !!}</td>
    		</li>
		</ul>
	</div>
@endsection