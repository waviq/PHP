<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemberitahuansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemberitahuans', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('provider_id')->unsigned();
            $table->string('judul_pelanggaran');
            $table->string('link_pelanggaran');
            $table->string('link_asli');
            $table->string('deskripsi')->nullable;
            $table->text('template');
            $table->smallInteger('content_removed')->default(0);
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
		Schema::drop('pemberitahuans');
	}

}
