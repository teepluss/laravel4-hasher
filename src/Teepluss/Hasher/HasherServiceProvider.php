<?php namespace Teepluss\Hasher;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class HasherServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
     * Bootstrap classes for packages.
     *
     * @return void
     */
    public function boot()
    {
        //$this->package('teepluss/hasher');

        // Auto create app alias with boot method.
        $loader = AliasLoader::getInstance();
        $loader->alias('Hasher', __NAMESPACE__.'\Facades\Hasher');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['hasher'] = $this->app->share(function()
		{
			return new Utility\Hash;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hasher');
	}

}
