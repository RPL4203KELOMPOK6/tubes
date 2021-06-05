<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('penyanyi');
            $table->string('gambar');
            $table->integer('harga');
            $table->longtext('deskripsi');
            $table->timestamps();
            $table->unsignedBigInteger('pemasok_id');
            $table->foreign('pemasok_id')->references('id')->on('pemasok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
}
