<?php


namespace App\Providers;


use DI\Container;
use DI\ContainerBuilder;
use FeedFaker\Config\Settings;
use Illuminate\Support\ServiceProvider;
use Psr\Container\ContainerInterface;

class FakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Container::class, function ($app) {
            $config = Settings::load([]);
            $container = new ContainerBuilder();
            $container->addDefinitions($config);

            return $container->build();
        });
    }
}