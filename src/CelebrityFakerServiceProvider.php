<?php namespace Sukohi\CelebrityFaker;

use Illuminate\Support\ServiceProvider;

class CelebrityFakerServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var  bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/celebrity_faker.php' => config_path('celebrity_faker.php')
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('celebrity-faker', function()
        {
            return new CelebrityFaker;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['celebrity-faker'];
    }

}