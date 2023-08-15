<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}
