<?php namespace App\Providers;

use App\Artikel;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavMenu();
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	}

    private function composeNavMenu()
    {
        view()->composer('partials.navMenu', function ($view)
        {
            $view->with('latest', Artikel::latest()->first());
        });
    }

}
