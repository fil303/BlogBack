<?php

use Illuminate\Support\Facades\Auth;

 if(!function_exists('is_admin')){
 	function is_admin(){
 		return Auth::user()->roles[0]->name == "Admin";
 	}
 }
 if(!function_exists('user')){
 	function user($in){
 		return Auth::user()->$in;
 	}
 }
 if(!function_exists('is_login')){
 	function is_login(){
 		return Auth::check();
 	}
 }