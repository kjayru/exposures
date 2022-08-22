<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('method');
            $table->string('source_id');
            $table->string('amount');
            $table->string('device_session_id');
            $table->string('reference');
            $table->string('barcode_url');
            $table->string('recibo_url');
            $table->integer('payed');
            $table->string('sessid');
            
            $table->unsignedInteger('payment_type_id');
            $table->foreign('payment_type_id')->references('id')->on('payment_types')->onUpdate('cascade');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade');

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
        Schema::dropIfExists('payments');
    }
}
