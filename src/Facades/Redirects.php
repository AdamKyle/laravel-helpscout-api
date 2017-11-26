<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Redirects extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.get.redirects';
    }
}
