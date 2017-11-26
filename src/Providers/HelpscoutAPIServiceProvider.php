<?php

namespace LaravelHelpscout\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use LaravelHelpscout\Helium\Domain\Values\ApiKey;
use HelpscoutApi\Api\Get\Articles;
use HelpscoutApi\Api\Get\Collections;
use HelpscoutApi\Api\Get\Categories;
use HelpscoutApi\Api\Get\Redirects;
use HelpscoutApi\Api\Get\Sites;

/**
 * Service provider to register the facades
 *
 */
class HelpscoutAPIServiceProvider extends ServiceProvider {

    /**
     * GuzzleHttp\Client
     */
    private $client;

    /**
     * Api key
     */
    private $apiKey;

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
        $this->apiKey = new ApiKey(env('HELPSCOUT_DOCS_API_KEY'));

        $this->client = new Client([
            'base_uri' => 'https://docsapi.helpscout.net/v1/',
        ]);

        $this->app->singleton('helpscout.api.get.articles', function () {
            return new Articles($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.get.collections', function () {
            return new Collections($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.get.categories', function () {
            return new Categories($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.get.redirects', function () {
            return new Redirects($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.get.sites', function () {
            return new Sites($this->client, $this->apiKey);
        });

        $this->app->alias('helpscout.api.get.articles',  Articles::class);
        $this->app->alias('helpscout.api.get.collections',  Collections::class);
        $this->app->alias('helpscout.api.get.categories',  Categories::class);
        $this->app->alias('helpscout.api.get.redirects',  Redirects::class);
        $this->app->alias('helpscout.api.get.sites',  Sites::class);
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
            Categories::class,
            Redirects::class,
            Sites::class,
        ];
    }
}
