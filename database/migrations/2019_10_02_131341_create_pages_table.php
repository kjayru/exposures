<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('meta_description');
            $table->string('meta_title');
            $table->string('meta_imagen');
            $table->string('keywords');
           
            $table->unsignedInteger('slide_id');
            $table->foreign('slide_id')->references('id')->on('slides')->onUpdate('cascade');
            $table->unsignedInteger('video_id');
            $table->foreign('video_id')->references('id')->on('videos')->onUpdate('cascade');
            
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
        Schema::dropIfExists('pages');
    }
}
