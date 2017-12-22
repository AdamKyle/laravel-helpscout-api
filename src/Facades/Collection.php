<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class Collection extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.post.collection'; 
    }
}
