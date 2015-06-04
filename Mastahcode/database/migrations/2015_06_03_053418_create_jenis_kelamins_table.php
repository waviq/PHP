<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisKelaminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jenisKelamin', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('jenisKelamin');
            $table->timestamps();


		});

        Schema::create('detailJenisKelamin', function (Blueprint $table)
        {
            $table->integer('idUser')->unsigned()->index();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');

            $table->integer('idJenisKelamin')->unsigned()->index();
            $table->foreign('idJenisKelamin')->references('id')->on('jenisKelamin')->onDelete('cascade');

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
		Schema::drop('jenisKelamin');
        Schema::drop('DetailJenisKelamin');
	}

}
