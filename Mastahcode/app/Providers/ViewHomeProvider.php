<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewHomeProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('Page.HalamanUtama', function($view){

        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
