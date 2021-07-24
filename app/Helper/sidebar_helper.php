<?php

use App\Models\Category;
if(!function_exists('sidebar')){
	function sidebar($sub = ''){
		$Bar = array();
		if($sub == ''){
			if(true){
				$Bar[] = array(
					'name' => 'Dashboard',
					'icon' => 'mdi mdi-view-quilt menu-icon',
					'url' => url('/dashboard'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Noteis',
					'icon' => 'mdi mdi-email menu-icon',
					'url' => url('/log'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Write Article',
					'icon' => 'mdi mdi-book-multiple-plus menu-icon',
					'url' => url('/newpost'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Published Article',
					'icon' => 'mdi mdi-earth menu-icon',
					'url' => url('/post?page=published'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Pending Article',
					'icon' => 'mdi mdi-earth menu-icon',
					'url' => url('/post?page=panding'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Drafts',
					'icon' => 'mdi mdi-recycle menu-icon',
					'url' => url('/post?page=draft'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Account',
					'icon' => 'mdi mdi-palette menu-icon',
					'url' => url('/profile'),
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Payment',
					'icon' => 'mdi mdi-currency-bdt menu-icon',
					'url' => url('/payment'),
					'type' => 0
 				);
			}
			if(false){
				$Bar[] = array(
					'name' => 'About',
					'icon' => 'mdi mdi-comment-alert menu-icon',
					'url' => '#',
					'type' => 0
 				);
			}
			if(false){
				$Bar[] = array(
					'name' => 'Praivacy Policy',
					'icon' => 'mdi mdi-picture-in-picture-bottom-right menu-icon',
					'url' => '#',
					'type' => 0
 				);
			}
			if(false){
				$Bar[] = array(
					'name' => 'Decalemation',
					'icon' => 'mdi mdi-regex menu-icon',
					'url' => '#',
					'type' => 0
 				);
			}
			if(false){
				$Bar[] = array(
					'name' => 'Terms And Condition',
					'icon' => 'mdi mdi-calendar-range menu-icon',
					'url' => '#',
					'type' => 0
 				);
			}
			if(true){
				$Bar[] = array(
					'name' => 'Sign Out',
					'icon' => 'mdi mdi-logout menu-icon',
					'url' => action([Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy']),
					'type' => 0
 				);
			}
			 ksort($Bar);
			return $Bar;
		}else{
			if($sub == 'Category'){
				$Bar[] = array(
					'name' => 'Islamic',
					'url' => '#',
 				);
				$Bar[] = array(
					'name' => 'Hacking',
					'url' => '#',
 				);
				$Bar[] = array(
					'name' => 'Tips & Tricks',
					'url' => '#',
 				);
				$Bar[] = array(
					'name' => 'Traveling',
					'url' => '#',
 				);
			}
			ksort($Bar);
			return $Bar;
		}
	}
}

if(!function_exists('category')){
	function category($val = null){
		$html = null ;
		$cat = Category::get();

		foreach($cat as $c){
			$s = '';
			if($val){
				$s = $val == $c->id ? 'selected' : '';
			}
			$html .= '<option value="'.$c->id.'" '.$s.'>'.$c->name.'</option>';
		}
		return $html;
	}
}
