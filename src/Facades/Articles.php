<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Articles extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.get.articles'; 
    }
}
