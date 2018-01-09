<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class ArticlePut extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.put.article';
    }
}
