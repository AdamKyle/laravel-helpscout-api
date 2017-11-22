# Helpscout Laravel Bridge

This is a very simple project that supports [the Helpscout API project I started](https://github.com/AdamKyle/helpscout-api).

As such all tests are in that particular project. Also see that project for the [Api](https://github.com/AdamKyle/helpscout-api/blob/master/docs/ApiIndex.md).

This particular package for Laravel is nothing more then a Service provider that registers a set of facades to make accessing the
API Endpoints easier.

## Setup

- `composer require adambalan/laravel-helpscout`
- Create an ENV called: `HELPSCOUT_DOCS_API_KEY` and assign it your appropriate API key.

The laravel provider and facades will be discovered automatically. The fallowing facades are:

- [Articles](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Articles.md)
- [Collections](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Collections.md)
- [Categories](https://github.com/AdamKyle/helpscout-api/blob/master/docs/HelpscoutApi-Api-Get-Categories.md)

All of the methods implemented on these classes require a contract be passed in. contracts are interfaces for getters/setters
that define specific set of behaviour and can be implemted as Value objects (as apaert of DDD).

## Where are the tests?

The tests are located in [the Helpscout API project I started](https://github.com/AdamKyle/helpscout-api).

I did not include tests here because this is nothing more then facades and a provider. There is no core logic here.
