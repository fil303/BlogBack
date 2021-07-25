<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function profile_update(Request $r){
    	$r['name'] = $r->firstname.' '.$r->lastname;
    	User::where('id',user('id'))->update($r->except('_token'));
    	return redirect()->back()->with('success','Profle update success');
    }

    public function profile_picUpdate(Request $r){
        $r->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(user('img') !== null){
    		unlink(public_path(user('img')));
    		unlink(public_path(user('icon')));
    	}
    	$name = time().'.'.$r->file('image')->getClientOriginalExtension();
    	$img = Image::make($r->file('image'))->save(public_path('profile/'.$name));
    	$icon = Image::make($r->file('image'))->resize(300, 300)->save(public_path('profile/icon/'.$name));
    	
    	User::where('id',user('id'))->update(['img'=>'/profile/'.$name,'icon'=>'/profile/icon/'.$name]);
    	return redirect()->back()->with('success','Profle Photo Update Success');
    }
}
