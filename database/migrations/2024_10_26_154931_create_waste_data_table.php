<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWasteDataTable extends Migration
{
    public function up()
    {
        Schema::create('waste_data', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->integer('quantity');
            $table->string('type');
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('waste_data');
    }
}
