<?php

namespace LaravelHelpscout\Helium\Domain\Values;

use HelpscoutApi\Contracts\ApiKey as ApiKeyContract;

class ApiKey implements ApiKeyContract {

    private $apiKey;

    public function __construct(string $apiKey) {
        $this->apiKey = $apiKey;
    }

    public function getKey(): string {
        return $this->apiKey;
    }
}
