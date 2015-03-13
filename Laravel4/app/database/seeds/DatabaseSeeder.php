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

		$this->call('PostsTableSeeder','customersTableSeeder');
                $this->call('customersTableSeeder');
                $this->command->info('data berhasil di masukan');
	}

}
