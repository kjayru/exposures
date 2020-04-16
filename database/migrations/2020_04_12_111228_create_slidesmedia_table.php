<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slidesmedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id')->unsigned()->index();
            $table->foreign('slide_id')->references('id')->on('slides')->onDelete('cascade');
            $table->string('pathfile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slidesmedia');
    }
}
