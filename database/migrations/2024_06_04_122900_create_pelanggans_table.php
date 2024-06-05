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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->char('id_pelanggan', 36)->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->char('id_vendor', 36)->nullable();
            $table->timestamps();

            $table->foreign('id_vendor')->references('id_vendor')->on('vendors');
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
