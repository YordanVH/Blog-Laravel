<div class="form-group">
	{!! Form::label('title', 'Titulo') !!}
	{!! Form::text('title', (empty($article) ? null : $article->title), ['class' => 'form-control', 'placeholder' => 'Titulo del articulo'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('category_id', 'Categorias') !!}
	{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'palaceholder' => 'Seleccione una categoria', 'required'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Contenido') !!}
	{!! Form::textarea('content', (empty($article) ? null : $article->content), ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image') !!}
</div>

<div class="form-group">
	{!! Form::label('tags', 'Etiquetas') !!}
	{!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'palaceholder' => 'Seleccione una etiqueta', 'multiple','required'] ) !!}
</div>