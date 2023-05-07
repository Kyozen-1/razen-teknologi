<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananPemerintahanProdukUnggulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_pemerintahan_produk_unggulans', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('layanan_pemerintahan_produk_unggulans');
    }
}
