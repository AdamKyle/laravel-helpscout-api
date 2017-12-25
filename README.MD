# Helpscout Laravel Bridge

This is a very simple project that supports [the Helpscout API project I started](https://github.com/AdamKyle/helpscout-api).

As such all tests are in that particular project. Also see that project for the [Api](https://github.com/AdamKyle/helpscout-api/blob/master/docs/ApiIndex.md).

This particular package for Laravel is nothing more then a Service provider that registers a set of facades to make accessing the
API Endpoints easier.

## Setup

- `composer require adambalan/laravel-helpscout`
- Create an ENV called: `HELPSCOUT_DOCS_API_KEY` and assign it your appropriate API key.


## GET Requests (Facades)

- [`\Articles`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Articles.md)
- [`\Collections`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Collections.md)
- [`\Categories`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Categories.md)
- [`\Redirects`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Redirects.md)
- [`\Sites`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Sites.md)

## POST Requests (Facades)

- [`\Article`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Post-Article.md)
- [`\Collection`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Post-Collection.md)
- [`\Categorie`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Post-Categorie.md)

## DELETE Requests (Facades)
- [`\ArticleDelete`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Delete-Article.md)

## ASYNC (Facades)

- [`\Pool`](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Pool.md)

## Response Class (Regular Class: `HelpscoutApi\Response\Response`)

We have a response class that contains two methods: `getLocation()` and `getContents()` which allows you to get the location of the created object and the contents
of the body of the response.

For the created response to come back, pass in: `{'required': true}` for the body when implementing the Post Body contracts. This will make sure that any created
resources are passed back to you and you can use the `getContents()` method to get the decoded JSON values.

For more info please see the [Response](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Response-Response.md) docs.

## Where are the tests?

The tests are located in [the Helpscout API project I started](https://github.com/AdamKyle/helpscout-api).

I did not include tests here because this is nothing more then facades and a provider. There is no core logic here.
