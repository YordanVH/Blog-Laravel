<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = DB::table('categories')->orderBy('id', 'ASC')->paginate(10);
    	return view('admin.categories.index')->with('categories', $categories );
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(Request $request)
    {
		request()->validate([
            'name' => 'min:2|max:16|required'
        ]);

    	Category::create([
		    'name' => $request->name
		]);
		flash('Categoria creada exitosamente!')->success();
    	return redirect()->route('categories.index')->with('Success', 'Categoria guardada exitosamente'); 
    }

    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'min:1|max:16|required'
        ]);

    	Category::find($id)->fill($request->all())->update();
    	flash('Categoria actualizada exitosamente!');
		return redirect()->route('categories.index')->with('success','Categoria actualizada exitosamente!');
    }


    public function destroy($id)
    {
    	Category::find($id)->delete();
    	flash('Categoria eliminada exitosamente!')->error();
    	return redirect()->route('categories.index')->with('success', 'Categoria eliminada exitosamente');
    }
}
