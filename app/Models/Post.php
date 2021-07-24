<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

	protected $fillable = [
		'title',
		'img',
		'content',
		'category_id',
		'subcategory_id',
		'click',
		'view',
		'last_click',
		'last_view',
		'status',
		'cus_cat'
	];

}
