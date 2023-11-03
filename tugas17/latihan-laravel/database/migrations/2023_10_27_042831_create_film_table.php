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
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul',45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster',45);
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
};

