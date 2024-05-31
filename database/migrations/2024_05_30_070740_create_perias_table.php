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
        Schema::create('perias', function (Blueprint $table) {
            $table->char('id_perias', 36)->primary();
            $table->string('nama');
            $table->string('kontak');
            $table->integer('biaya');
            $table->string('ketersediaan');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perias');
    }
};