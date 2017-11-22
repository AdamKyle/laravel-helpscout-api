<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Collections extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.get.collections';
    }
}
