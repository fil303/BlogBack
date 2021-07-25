<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('content',255)->nullable();
            $table->tinyInteger('category_id')->unsigned()->nullable();
            $table->tinyInteger('subcategory_id')->unsigned()->nullable();
            $table->string('click',9)->nullable();
            $table->string('view',9)->nullable();
            $table->date('last_click')->nullable();
            $table->date('last_view')->nullable();
            $table->tinyInteger('status')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
