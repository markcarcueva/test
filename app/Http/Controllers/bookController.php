<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class bookController extends Controller
{
    
	function bookSubmit(request $request){

		$Author = 1;

		//$Author = $request->input('AuthorID');
		$bookName = $request->input('title');
		$bookDescription = $request->input('description');
		$Genre = $request->input('genre');
		//$Cover = $request->input('bookCover');

		DB::insert ('insert into books (authorID, bookName,Description, Genre) values(?,?,?,?)', [$Author,$bookName,$bookDescription,$Genre]);

		return view("dashboard");

	}


public function books(request $request){

	$Author = "test";
	$bookName = "test";
	$bookDescription = "test";
	$Genre = "test";
	$Cover = "test";

	 $users = DB::select('select * from books where Author=?', [$Author]);
	 if(count($users)>=1){

	 
	 	//return redirect()->route()bookSubmit

	 }

}

}
