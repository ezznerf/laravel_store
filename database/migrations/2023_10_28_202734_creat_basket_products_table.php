<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatBasketProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('baskets_id');
            $table->unsignedBigInteger('products_id');
            $table->integer('quantity');
            $table->foreign('products_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('baskets_id')
                ->references('id')
                ->on('baskets')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('basket_products', function (Blueprint $table) {

            $table->dropForeign(['products_id']);
            $table->dropForeign(['baskets_id']);
        });

        Schema::dropIfExists('basket_products');
    }
}
