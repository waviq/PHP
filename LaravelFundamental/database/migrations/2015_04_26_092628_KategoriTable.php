<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KategoriTable extends Migration {

    public function up()
    {
        Schema::create('kategori', function (Blueprint $tabel)
        {
            $tabel->increments('id');
            $tabel->string('namaKategori');
            $tabel->timestamps();
        });

        Schema::create('detail_kategori', function (Blueprint $tabel)
        {
            $tabel->integer('artikel_id')->unsigned()->index();
            $tabel->foreign('artikel_id')->references('id')->on('artikel')->onDelete('cascade');

            $tabel->integer('kategori_id')->unsigned()->index();
            $tabel->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');

            $tabel->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('kategori');
        Schema::drop('detail_kategori');
    }

}
