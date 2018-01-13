<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(Request $request)
    {
        
    	$tags = Tag::Search('name')->get();
    	return view('admin.tags.index')->with('tags', $tags);
    }

    public function create()
    {
    	return view('admin.tags.create');
    }

    public function store(Request $request)
    {
    	request()->validate([
            'name' => 'min:2|max:16|required'
        ]);

    	Tag::create([
		    'name' => $request->name
		]);

		flash('Etiqueta creada exitosamente!')->success();

    	return redirect()->route('tags.index');
    }

    public function edit($id)
    {
    	$tag = Tag::find($id);
    	return view('admin.tags.edit', compact('tag') );
    }

    public function update(Request $request, $id)
    {
    	request()->validate([
            'name' => 'min:2|max:16|required'
        ]);

    	Tag::find($id)->fill($request->all())->update();
    	flash('Etiqueta actualizada exitosamente!');
		return redirect()->route('tags.index');
    }

    public function destroy($id)
    {
    	Tag::find($id)->delete();
    	flash('Etiqueta eliminada exitosamente!')->error();
    	return redirect()->route('tags.index');
    }
}
