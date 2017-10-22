<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbBanhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('slides', function(Blueprint $table){
            $table->increments('id');
            $table->string('link', 100);
            $table->string('image', 100);
        });

        Schema::create('news', function(Blueprint $table){
            $table->increments('id');
            $table->string('title', 200);
            $table->text('content')->nullable();
            $table->string('image', 100);
            $table->timestamps();
        });

        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->string('email', 50);
             $table->string('address', 100)->nullable();
            $table->string('phone_number', 20);
            $table->string('note', 200)->nullable();
            $table->timestamps();
        });

        Schema::create('product_categories', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('image', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('id_category')->unsigned();
            $table->text('description')->nullable();
            $table->float('unit_price')->default(0);
            $table->float('promotion_price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('unit', 255);
            $table->integer('quantity')->default(0);
            $table->tinyInteger('new');
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('product_categories');
        });

         Schema::create('bills', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_customer')->unsigned();
            $table->dateTime('date_order')->nullable();
            $table->float('total')->default(0);
            $table->string('payment', 200);
            $table->string('note', 500)->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('customers');
        });

         Schema::create('bill_details', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_bill')->unsigned();
            $table->integer('id_product')->unsigned();
            $table->integer('quantity')->default(0);
            $table->double('unit_price')->default(0);
            $table->timestamps();

            $table->foreign('id_bill')->references('id')->on('bills');
            $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slide');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('productcategories');
        Schema::dropIfExists('products');
        Schema::dropIfExists('bill');
        Schema::dropIfExists('bill_detail');
    }
}
