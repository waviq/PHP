<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
                
                /**
                 * Panggil SentrySeeder yg bru d buat
                 */
		$this->call('SentrySeeder');
        $this->call('AuthorsTableSeeder');
        $this->call('BooksTableSeeder');
	}

}
