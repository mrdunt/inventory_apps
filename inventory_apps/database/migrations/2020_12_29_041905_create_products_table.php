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
            $table->unsignedInteger('product_category_id');
            $table->unsignedInteger('uom_id');
            $table->string('name',50);
            $table->integer('qty');
            $table->string('image',255);
            $table->timestamps();
            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreign('uom_id')->references('id')->on('uom');
        });

        Schema::table('posts', function (Blueprint $table) {
            
            
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
