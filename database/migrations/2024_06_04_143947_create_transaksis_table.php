<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->char('id_pelanggan', 36)->primary();
            $table->char('id_vendor', 36);
            $table->integer('total_harga');
            $table->date('tgl_transaksi');
            $table->timestamps();

            $table->foreign('id_vendor')->references('id_vendor')->on('vendors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
