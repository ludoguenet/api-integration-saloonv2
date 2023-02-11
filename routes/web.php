<?php

declare(strict_types=1);

use App\Http\Integrations\FakeIntegration\FakeConnector;
use App\Http\Integrations\FakeIntegration\Requests\GetCommentsRequest;
use Illuminate\Support\Facades\Route;

Route::get('/yeehaw', function () {
    $connector = new FakeConnector();
    $request = new \App\Http\Integrations\FakeIntegration\Requests\StorePostRequest();
    $request
        ->body()
        ->merge([
            'title' => 'Nord Coders',
            'body' => 'Bonjour',
            'userId' => 15,
        ]);

    $response = $connector->send($request);

    ray(
        $response->body(),
        $response->json(),
    );
});
