<?php

namespace LaravelHelpscout\Facades;

use Illuminate\Support\Facades\Facade;

class CollectionDelete extends Facade {
    protected static function getFacadeAccessor() {
        return 'helpscout.api.delete.collection';
    }
}
