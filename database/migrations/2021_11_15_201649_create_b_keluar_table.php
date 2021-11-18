<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_keluar', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->integer('kode_bm');
            $table->BigInteger('barang_id')->unsigned();
            $table->integer('kode_trans');
            $table->integer('jmlh');
            $table->integer('harga_total');
            $table->string('user');
            $table->string('supplier');
            $table->string('diskon');

            $table->foreign("barang_id")->references('id')
                ->on('barangs')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('b_keluar');
    }
}
