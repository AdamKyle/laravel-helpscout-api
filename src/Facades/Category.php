<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Category extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.post.category'; 
    }
}
