<?php

namespace Bert86014\LaravelErc20;

use Illuminate\Support\ServiceProvider;
use EthereumRPC\EthereumRPC;

class Erc20RpcServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/config.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('ethereum.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('ethereum');
        }
        $this->mergeConfigFrom($source, 'ethereum');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->setupConfig();
        $this->app->singleton('Erc20Rpc', function () {
            $eth = new EthereumRPC(config('ethereum.host'), config('ethereum.port'));
            return new Ethereum($eth);
        });
    }
}