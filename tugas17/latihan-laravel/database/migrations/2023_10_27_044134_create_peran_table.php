<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',45);
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('cast')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran');
    }
};

