<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            //ISI KOLOM DATABASE
            Schema::create('customers', function ($table){
                $table->increments('id');
                $table->string('nama');
                $table->string('alamat');
                $table->string('email')->unique();
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
            //HAPUS DATABASE SUPAYA TIDAK TERJADI DUPLIKASI DATA
            Schema::drop('customers');

	}

}
