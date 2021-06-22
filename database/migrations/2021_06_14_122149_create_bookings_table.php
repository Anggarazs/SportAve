<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor');
            $table->date('tanggal_booking');
            $table->time('awal');
            $table->time('akhir');
            $table->foreignId('data_lapangan_id')->constrained('data_lapangans')->onDelete('Cascade')->onUpdateCascade();
            $table->enum('bayar', ['BNI/7783726', 'BRI/958473627','Dana/0823857549504']);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('bookings');
    }
}
