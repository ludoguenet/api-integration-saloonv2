<?php

declare(strict_types=1);

namespace App\Http\Integrations\FakeIntegration\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

final class GetCommentsRequest extends Request
{
    public function __construct(
        readonly protected int $postId,
    ) { }

    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/comments?postId=' . $this->postId;
    }
}
