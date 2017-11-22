<?php

namespace LaravelHelpscout\Helium\Domain\Values;

use HelpscoutApi\Contracts\ApiKey as ApiKeyContract;

class ApiKey implements ApiKeyContract {

    private $apikey;

    public function __construct(string $apiKey) {
        $this->apikey = $apikey;
    }

    public function getKey() {
        return $this->apikey;
    }
}
