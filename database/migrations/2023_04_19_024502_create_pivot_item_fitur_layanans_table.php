<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotItemFiturLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_item_fitur_layanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fitur_layanan_id')->nullable();
            $table->foreign('fitur_layanan_id')->references('id')->on('fitur_layanans')->onDelete('cascade');
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('pivot_item_fitur_layanans');
    }
}
