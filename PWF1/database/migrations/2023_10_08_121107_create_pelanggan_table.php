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
    Schema::create('pelanggan', function (Blueprint $table) {
        $table->id('pelanggan_id');
        $table->string('nama');
        $table->string('email')->unique();
        $table->text('alamat');
        $table->string('nomor_telepon', 20);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
