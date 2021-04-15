<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLapangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_lapangans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->enum('jenis_lapangan', ['rumput', 'matras']);
            $table->integer('harga')->nullable();
            $table->string('foto_lapangan')->nullable();
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
        Schema::dropIfExists('data_lapangans');
    }
}
