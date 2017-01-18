<?php
namespace oteroweb\EntrustCrudGenerator;
use Illuminate\Support\ServiceProvider;
class EntrustCrudGeneratorProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
	
		// Config
		$this->publishes([
			__DIR__ . '/../src/config/EntrustCrudGenerator.php' => config_path('EntrustCrudGenerator.php'),
		], 'config');
		
		
		// Views
		$this->loadViewsFrom(__DIR__.'/../src/views', 'EntrustCrudGenerator');
		
		$this->publishes([
			__DIR__.'/../src/views' => resource_path('views/vendor/EntrustCrudGenerator'),
		], 'views');
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}