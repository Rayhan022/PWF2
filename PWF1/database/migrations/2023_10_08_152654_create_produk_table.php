<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('produk', function (Blueprint $table) {
        $table->id('product_id');
        $table->string('nama_produk');
        $table->text('deskripsi');
        $table->decimal('harga', 10, 2); // Harga dengan dua angka desimal
        $table->integer('stok');
        $table->string('gambar_produk');
        $table->string('kategori');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
