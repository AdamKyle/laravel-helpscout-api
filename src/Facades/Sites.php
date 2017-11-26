<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Sites extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.get.sites';
    }
}
