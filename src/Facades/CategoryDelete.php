<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class CategoryDelete extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.delete.category';
    }
}
