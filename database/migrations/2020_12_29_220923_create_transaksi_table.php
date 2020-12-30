<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('t_id')->unique();
            $table->integer('id')->unsigned();
            $table->integer('p_id')->unsigned();
            $table->integer('t_total');
            $table->string('t_status');
            $table->timestamps();

        });
        Schema::table('transaksi', function($table){
            $table->foreign('id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('transaksi', function($table){
            $table->foreign('p_id')
                ->references('p_id')
                ->on('produk')
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
        Schema::dropIfExists('transaksi');
    }
}
