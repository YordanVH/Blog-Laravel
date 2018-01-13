<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\redirect;
use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;

class ArticlesController extends Controller
{
    public function index()
    {
    	//$articles = DB::table('articles')->orderBy('id', 'ASC')->paginate(15);
        $articles = Article::all();
    	return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
    	$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
    	$tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id'); 
    	return view('admin.articles.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
    	if($request->file('image')->isValid())
    	{
    		$file = $request->file('image');
	    	$name = 'blog_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path() . '/images/articles';
	    	$file->move($path, $name);
    	}

    	$article = new Article($request->all());
    	$article->user_id = \Auth::user()->id;
    	$article->save();

    	$article->tags()->sync($request->tags);

    	$image = new Image();
    	$image->name = $name;
    	$image->article()->associate($article);
    	$image->save();

    	flash('Articulo: '. $article->title . ' creado exitosamante!')->success();
    	return redirect()->route('articles.index');
    	
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.articles.show', compact('article'));
    }

    public function edit($id)
    {
    	
    }

    public function update(Request $request, $id)
    {
    	
    }

    public function destroy($id)
    {
    	
    }
}
