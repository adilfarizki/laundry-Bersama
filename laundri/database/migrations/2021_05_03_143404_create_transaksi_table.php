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
            $table->unsignedBigInteger('id_outlet');
            $table->foreign('id_outlet')->references('id')->on('outlet');
            $table->string('kode_invoice',100);
            $table->unsignedBigInteger('id_member');
            $table->foreign('id_member')->references('id')->on('member');
            $table->dateTime('tgl');
            $table->dateTime('batas_waktu');
            $table->dateTime('tanggal_bayar');
            $table->integer('biaya_tambahan');
            $table->integer('diskon');
            $table->integer('pajak');
            $table->enum('baru',['proses','selesai','diambil']);
            $table->enum('dibayar',['dibayar','belum_dibayar']);
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
