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
use HelpscoutApi\Api\Post\Article;
use HelpscoutApi\Api\Put\Article as ArticlePut;
use HelpscoutApi\Api\Delete\Article as ArticleDelete;
use HelpscoutApi\Api\Delete\Category as CategoryDelete;
use HelpscoutApi\Api\Delete\Collection as CollectionDelete;
use HelpscoutApi\Api\Post\Collection;
use HelpscoutApi\Api\Post\Category;
use HelpscoutApi\Api\Pool;

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

        $this->app->singleton('helpscout.api.post.article', function() {
            return new Article($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.post.category', function() {
            return new Category($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.post.collection', function() {
            return new Collection($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.delete.article', function() {
            return new ArticleDelete($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.delete.collection', function() {
            return new CollectionDelete($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.delete.category', function() {
            return new CategoryDelete($this->client, $this->apiKey);
        });

        $this->app->singleton('helpscout.api.pool', function() {
            return new Pool($this->client);
        });

        $this->app->singleton('helpscout.api.put.article', function() {
            return new ArticlePut($this->client, $this->apiKey);
        });

        $this->app->alias('helpscout.api.get.articles',  Articles::class);
        $this->app->alias('helpscout.api.get.collections',  Collections::class);
        $this->app->alias('helpscout.api.get.categories',  Categories::class);
        $this->app->alias('helpscout.api.get.redirects',  Redirects::class);
        $this->app->alias('helpscout.api.get.sites',  Sites::class);
        $this->app->alias('helpscout.api.post.article', Article::class);
        $this->app->alias('helpscout.api.delete.article', ArticleDelete::class);
        $this->app->alias('helpscout.api.delete.category', CategoryDelete::class);
        $this->app->alias('helpscout.api.delete.collection', CollectionDelete::class);
        $this->app->alias('helpscout.api.post.collection', Collection::class);
        $this->app->alias('helpscout.api.post.category', Category::class);
        $this->app->alias('helpscout.api.post.category', Category::class);
        $this->app->alias('helpscout.api.pool', Pool::class);
        $this->app->alias('helpscout.api.put.article', ArticlePut::class);
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
            Article::class,
            Category::Class,
            Collection::class,
            Pool::class,
            ArticleDelete::class,
            CategoryDelete::class,
            CollectionDelete::class,
            ArticlePut::class,
        ];
    }
}
