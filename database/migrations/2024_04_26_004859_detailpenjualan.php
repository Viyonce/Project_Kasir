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
        Schema::create('DetailPenjualan',function(Blueprint $table){
            $table->integer('DetailID')->Primary();
            $table->integer('PenjualanID');
            $table->integer('ProdukID');
            $table->integer('JumlahProduk');
            $table->decimal('Subtotal');
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
