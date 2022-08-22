<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealersmedia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dealer_id')->unsigned()->index();
            $table->foreign('dealer_id')->references('id')->on('dealers')->onDelete('cascade');

            $table->string('pathimage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealersmedia');
    }
}
