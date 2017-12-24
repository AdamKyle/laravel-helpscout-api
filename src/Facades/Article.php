<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Article extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.post.article';
    }
}
