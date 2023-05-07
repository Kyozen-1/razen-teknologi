<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropGambarFromLayananStartupProdukRintisans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('layanan_startup_produk_rintisans', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('layanan_startup_produk_rintisans', function (Blueprint $table) {
            //
        });
    }
}
