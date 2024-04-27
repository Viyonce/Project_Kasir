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
        Schema::create('Penjual',function(Blueprint $table){
            $table->integer('PenjualanID')->Primary();
            $table->date('TanggalPenjualan');
            $table->decimal('TotalHarga');
            $table->integer('PelangganID');
            $table->timestamps();
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
