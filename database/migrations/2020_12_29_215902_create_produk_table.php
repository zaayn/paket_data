<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('p_id')->unique();
            $table->integer('prov_id')->unsigned();
            $table->string('p_kategori');
            $table->string('p_nama');
            $table->string('p_deskripsi');
            $table->string('p_kuota');
            $table->integer('p_stok');
            $table->integer('p_harga');
            $table->timestamps();
        });
        Schema::table('produk', function($table){
            $table->foreign('prov_id')
                ->references('prov_id')
                ->on('provider')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
