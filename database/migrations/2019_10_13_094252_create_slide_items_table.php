<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('target');
            $table->integer('order');
            $table->unsignedInteger('slide_id');
            $table->foreign('slide_id')->references('id')->on('slides')->onUpdate('cascade');
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
        Schema::dropIfExists('slide_items');
    }
}
