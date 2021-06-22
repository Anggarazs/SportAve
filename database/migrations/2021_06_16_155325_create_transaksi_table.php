<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('Cascade')->onUpdateCascade();
            $table->integer('total');
            $table->string('bukti')->nullable();
            $table->enum('konfirmasi', ['Berhasil', 'Proses','Gagal'])->default('Proses');
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('Cascade')->onUpdateCascade();
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
        Schema::dropIfExists('transaksi');
    }
}
