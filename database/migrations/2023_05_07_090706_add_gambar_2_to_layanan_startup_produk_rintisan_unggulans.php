<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGambar2ToLayananStartupProdukRintisanUnggulans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('layanan_startup_produk_rintisan_unggulans', function (Blueprint $table) {
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('layanan_startup_produk_rintisan_unggulans', function (Blueprint $table) {
            //
        });
    }
}
