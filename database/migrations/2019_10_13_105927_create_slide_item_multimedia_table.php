<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideItemMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_item_multimedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_item_id')->unsigned()->index();
            $table->foreign('slide_item_id')->references('id')->on('slide_items')->onDelete('cascade');
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide_item_multimedia');
    }
}
