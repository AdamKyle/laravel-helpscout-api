<?php

namespace LaravelHelpscout\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use LaravelHelpscout\Helium\Domain\Values\ApiKey;
use HelpscoutApi\Api\Get\Articles;
use HelpscoutApi\Api\Get\Collections;
use HelpscoutApi\Api\Get\Categories;

class HelpscoutAPIServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {}

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $apikey = new ApiKey(env('HELPSCOUT_DOCS_API_KEY'));

        $client = new Client([
            'base_uri' => 'https://docsapi.helpscout.net/v1/',
        ]);

        $this->app->singleton('helpscout.api.get.articles', function () {
            return new Articles($client, $apikey);
        });

        $this->app->singleton('helpscout.api.get.collections', function () {
            return new Collections($client, $apikey);
        });

        $this->app->singleton('helpscout.api.get.categories', function () {
            return new Categories($client, $apikey);
        });

        $this->app->alias('helpscout.api.get.articles',  Articles::class);
        $this->app->alias('helpscout.api.get.collections',  Collections::class);
        $this->app->alias('helpscout.api.get.categories',  Categories::class);
    }

    /**
     * Register the providers.
     *
     * @return array
     */
    public function providers() {
        return [
            Articles::class,
            Collections::class,
            Categories::class
        ];
    }
}
