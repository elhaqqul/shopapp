<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class Login extends Controller
{
    function getLogin(Request $req){
    	$user = $req->input('username');
    	$pass = $req->input('password');
    	if($user == "admin" && $pass == "12345"){
    		Session::put('userlogin','admin');
    	}
    	return redirect('administrator/home');
    }
}
