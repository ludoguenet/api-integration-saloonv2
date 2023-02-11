<?php

declare(strict_types=1);

namespace App\Http\Integrations\FakeIntegration\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class StorePostRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/posts';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json; charset=UTF-8',
        ];
    }
}
