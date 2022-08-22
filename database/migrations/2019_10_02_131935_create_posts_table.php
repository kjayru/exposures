<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            
            $table->string('title');
            $table->string('slug');
            $table->text('excerpt');
            $table->text('content');
            $table->string('keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_imagen')->nullable();
           
            $table->unsignedInteger('category_blog_id');
            $table->foreign('category_blog_id')->references('id')->on('category_blogs')->onUpdate('cascade');

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
