<?php

declare(strict_types=1);

namespace App\Http\Integrations\FakeIntegration;

use Saloon\Http\Connector;

class FakeConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://jsonplaceholder.typicode.com';
    }

    /**
     * Default headers for every request
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * Default HTTP client options
     *
     * @return string[]
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
