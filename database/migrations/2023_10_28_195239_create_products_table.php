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
        Schema::dropIfExists('smartphones');
        Schema::dropIfExists('phones');
        Schema::dropIfExists('tablets');
        Schema::dropIfExists('smartwatches');

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('brand', 255);
            $table->double('price');
            $table->integer('battery');
            $table->text('description')->nullable();
            $table->integer('rom')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('megapixels')->nullable();
            $table->float('display_size');
            $table->string('processor')->nullable();
            $table->string('os')->nullable();
            $table->string('pulse')->nullable();
            $table->string('step_counter')->nullable();
            $table->string('waterproof')->nullable();
            $table->integer('type_id');

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

        Schema::create('smartwatches', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('battery');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('rom')->nullable();
            $table->string('display_size');
            $table->string('pulse');
            $table->string('step_counter');
            $table->string('waterproof');
            $table->text('os');
            $table->timestamps();
        });

        Schema::create('tablets', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('battery');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('rom');
            $table->unsignedBigInteger('ram');
            $table->unsignedBigInteger('megapixels');
            $table->string('display_size');
            $table->text('os');
            $table->text('processor');
            $table->timestamps();
        });

        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('battery');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('rom');
            $table->unsignedBigInteger('ram');
            $table->string('megapixels');
            $table->string('display_size');
            $table->timestamps();
        });

        Schema::create('smartphones', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('brand');
            $table->string('model');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('battery');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('rom');
            $table->unsignedBigInteger('ram');
            $table->unsignedBigInteger('megapixels');
            $table->string('display_size');
            $table->text('os');
            $table->text('processor');
            $table->timestamps();
        });
    }
}
