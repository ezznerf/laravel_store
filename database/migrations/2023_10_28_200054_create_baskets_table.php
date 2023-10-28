<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->timestampsTz();
        });

//        Schema::create('basket_products', function (Blueprint $table) {
//            $table->id();
//            $table->integer('basket_id');
//            $table->foreign('basket_id')
//                ->references('id')
//                ->on('baskets')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//            $table->integer('product_id');
//            $table->foreign('product_id')
//                ->references('id')
//                ->on('products')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//            $table->integer('quantity');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
        {
//        Schema::table('basket_products', function (Blueprint $table) {
//            $table->dropForeign(['basket_id']);
//            $table->dropForeign(['product_id']);
//        });

        Schema::dropIfExists('baskets');
//        Schema::dropIfExists('basket_products');
    }
}
