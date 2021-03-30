<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigInteger('id_barang',20)->unsigned();
            $table->string('kode_barang', 20)->nullable();
            $table->string('nama_barang', 20)->nullable();
            $table->string('kategori_barang', 20)->nullable();
            $table->string('harga', 20)->nullable();
            $table->string('qty', 10)->nullable();
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
        Schema::dropIfExists('barang');
    }
}
