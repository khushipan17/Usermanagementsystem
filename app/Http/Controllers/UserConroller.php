<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserConroller extends Controller
{
   public function index(){
		
		$users = User::all();
		return view( 'welcome' , ['users' => $users]);
	}
	
	public function create(){
		
		return view( 'user');
	}
	
    public function store(Request $request){
		
		User::create($request->all());
		return redirect('/welcome');
	
	  
}

public function edit($id){
	
	$user = User::find($id);
	return view('edit-user',[
	'user'=>$user
	]);
}

public function update(Request $request,$id){
	$user = User::find($id);
	$user->update($request->all());
	return redirect('/welcome');
	
	
}
public function delete($id){
	
	$user = User::find($id);
	$user->delete();
		return back();
	
}
}
