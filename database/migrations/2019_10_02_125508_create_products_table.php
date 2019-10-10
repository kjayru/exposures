<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('subtheme')->nullable();
            $table->decimal('price',8,2);
            $table->text('excerpt');
            $table->text('description');
            $table->string('title')->nullable();
            $table->integer('outlet')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('order')->nullable();

            $table->string('keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_imagen')->nullable();

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
