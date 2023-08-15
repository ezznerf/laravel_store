<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartwatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartwatches');
    }
}
