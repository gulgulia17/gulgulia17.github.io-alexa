<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('Product')->nullable();
            $table->string('Type')->nullable();
            $table->string('Composition')->nullable();
            $table->string('Qty')->nullable();
            $table->string('Size')->nullable();
            $table->string('Packing')->nullable();
            $table->string('MRP')->nullable();
            $table->string('Net_Rate')->nullable();
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
