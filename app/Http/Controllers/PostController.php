<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
   public function view_page(Request $r){
      $article = null ;
      if($r->page == 'panding') $article = Post::where('status',1)->get();
      if($r->page == 'published') $article = Post::where('status',3)->get();
      if($r->page == 'draft') $article = Post::where('status',2)->get();
      return view('post',compact('article'));

   }


   public function store_to_temp(Request $r){
   		$file_name = date("Y-m-d_H:i:s").rand(0,99999999).'.'.$r->file->extension();
   		//Image::make($r->file('file'))->save(public_path('temp/'.$file_name));
         $img = Image::make($r->file('file'));
         //$w_img = Image::make($r->file('file'));
         $img->insert(public_path('icon/bloggear.jpg'), 'bottom-right', 10, 10)->save(public_path('temp/'.$file_name));
   		return base_url.'public/temp/'.$file_name;
   }

   public function store_to_server(Request $r){
   		$status = $r->status;
   		if($status == '1') $status = 2;
   		else $status = 1;
   		$title = $r->title;
   		$img = json_decode($r->img);
   		$body = $r->body;
         $loop = 0 ;
         $data = [
            'title' => $title,
            'status' => $status
         ];
   		if(count($img) > 1){
   			foreach($img as $im){
				$old_dir = Str::replace(base_url.'public/','',$im);
				$old_img = Str::replace(base_url.'public/temp/','',$im);
				$new_img = rename(public_path($old_dir),public_path('post/'.$old_img));
				$body = Str::replace($im,base_url.'public/post/'.$old_img,$body);
             if (!$loop){ $data = array_merge($data, ['img' => base_url.'public/post/'.$old_img]);}
             $loop++;
   			}
   		}else if(count($img) == 1){
   				$old_dir = Str::replace(base_url.'public/','',$img[0]);
   				$old_img = Str::replace(base_url.'public/temp/','',$img[0]);
   				$new_img = rename(public_path($old_dir),public_path('post/'.$old_img));
   				$body = Str::replace($img[0],base_url.'public/post/'.$old_img,$body);
               $data = array_merge($data, ['img' => base_url.'public/post/'.$old_img]);
   		}
   		
         $data = array_merge($data, ['content' => $body]);
   		if(isset($r->cat)) $data = array_merge($data, ['category_id' => (Int) $r->cat]);
   		if(isset($r->cus_cat)) $data = array_merge($data, ['cus_cat' => $r->cus_cat]);
   		$data = Post::create($data);
   		return response()->json($data);
   }
   
   public function temp_delete(Request $r){
   		$img = $r->img;
   		$old_dir = Str::replace(base_url.'public/','',$img);
   		unlink(public_path($old_dir));
   		return response()->json(['status'=>true]);
   }
}
