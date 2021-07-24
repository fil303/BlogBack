<?php
if(!function_exists('logo_other_side')){
	function logo_other_side(){
		return'<div class="brand-logo text-center"> <a href="'.url('/').'"> <img src="'.asset('public/icon/bloggear-big.jpg').'" height="122px" width="30%" alt="logo"></a></div>';
	}
}
if(!function_exists('logo')){
	function logo(){
		return'<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"> <a class="navbar-brand brand-logo" href="'.url('/').'"> <img src="'.asset("public/icon/bloggear-big.jpg").'"  alt="logo"></a> </div>';
	}
}