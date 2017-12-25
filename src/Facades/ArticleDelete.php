<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class ArticleDelete extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.delete.article';
    }
}
