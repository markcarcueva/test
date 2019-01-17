<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class homeController extends Controller
{
    //  
    public function index() {
      echo "ÄSDASD";
   }


 public function loginShow(Request $request){
  
	return view("login");

  }


 public function signupShow(Request $request){
  
	return view("index");

  }


   public function signup(Request $request){
    $un = $request->input('username');
    $email = $request->input('email');
   	
   	$pw = Hash::make($request->input('pw'));

   	 DB::insert('insert into authors (username,email,password) values(?,?,?)',[$un,$email,$pw]); 

		return view('index');
   }


public function login(Request $request){
   $un = "test";
   $pw = "secret";

    $users = DB::select('select * from authors where username=? ',[$un]);
   if(count($users)>=1){
   $dpw = $users[0]->password;
    if (Hash::check($pw, $dpw)) {
    	 $request->session()->put('un','$un');
  	return redirect()->route('dashboard');
	}

}

}

}
