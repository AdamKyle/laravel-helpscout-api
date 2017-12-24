<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Pool extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.pool';
    }
}
