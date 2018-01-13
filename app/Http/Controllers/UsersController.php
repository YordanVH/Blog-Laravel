<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
//use App\Http\Controllers\Controller;


class UsersController extends Controller
{
    public function index()
    {
    	$users = DB::table('users')->orderBy('id', 'ASC')->paginate(4);
    	return view('admin.users.index')->with('users', $users );
    }

    public function create()
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
		request()->validate([
            'name' => 'min:4|max:16|required',
            'email' => 'required|unique:users',
            'password' => 'min:6|max:50|required'
        ]);

    	User::create([
		    'name' => $request->name,
		    'email' => $request->email,
		    'password' => bcrypt($request->password),
		    'type' => $request->type
		]);
    	return redirect()->route('users.index')->with('Success', 'Usuario guardado exitosamente'); 
    }

    public function show()
    {

    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'min:4|max:16|required',
            'email' => 'required|unique:users',
            'password' => 'min:6|max:50'
        ]);

    	User::find($id)->fill($request->all())->update();
		return redirect()->route('users.index')->with('success','Article updated successfully');;
    }


    public function destroy($id)
    {
    	User::find($id)->delete();
    	return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente');
    }

}