<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablets');
    }
}
