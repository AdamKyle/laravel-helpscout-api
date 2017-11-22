<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Categories extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.get.Categories';
    }
}
