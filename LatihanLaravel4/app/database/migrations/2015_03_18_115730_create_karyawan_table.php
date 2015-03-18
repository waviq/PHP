<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('karyawan', function($table)
		{
                    $table->increments('id');
                    $table->string('nama');
                    $table->string('password');
                    $table->string('email')->unique();
                    $table->string('alamat');
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
            Schema::drop('karyawan');
	}

}
