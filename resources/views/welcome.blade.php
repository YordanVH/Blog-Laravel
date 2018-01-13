@extends('admin.templates.main_home')


@section('title', 'Home')


@section('content')
	@foreach($articles as $article)
		<li onclick="location.href='single-page.html';">
			<img src="template_blog/images/img1.jpg" width="282" height="118">
			<div class="post-info">
				<div class="post-basic-info">
					<h3><a href="#">{!! $article->title !!}</a></h3>
					<span><a href="#"><label> </label>{!! $article->category->name !!}</a></span>
					<p>{!! $article->content !!}</p>
				</div>
				<div class="post-info-rate-share">
					@foreach($article->tags as $tag)
						<span class="label label-primary">{!! $tag->name !!}</span>
					@endforeach
					<div class="clear"> </div>
				</div>
			</div>
		</li>
	@endforeach
@endsection