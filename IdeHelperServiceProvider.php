<?php
/**
 * @author Rémy M. Böhler
 */

namespace Statamic\Addons\IdeHelper;

use Statamic\Extend\ServiceProvider;

/**
 * Class IdeHelperServiceProvider
 * @package Statamic\Addons\IdeHelper
 */
class IdeHelperServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $x = $this->app->make('db');
        if (in_array($this->app->environment(), $this->getConfig('environments', []))) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
