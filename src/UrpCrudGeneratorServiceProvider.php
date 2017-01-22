<?php
namespace oteroweb\UrpCrudGenerator;
use Illuminate\Support\ServiceProvider;

class UrpCrudGeneratorServiceProvider extends ServiceProvider
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
			__DIR__ . '/../src/config/UrpCrudGenerator.php' => config_path('UrpCrudGenerator.php'),
		], 'config');
		
		
		// Views
		$this->loadViewsFrom(__DIR__.'/../src/views', 'UrpCrudGenerator');
		
		$this->publishes([
			__DIR__.'/../src/views' => resource_path('views/vendor/UrpCrudGenerator'),
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