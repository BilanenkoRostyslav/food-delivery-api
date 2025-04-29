<?php

namespace App\Shared\Controllers;

use App\Shared\Data\Data;
use Illuminate\Http\JsonResponse;

abstract class Controller
{
    public function response(Data $data, string $message, int $status): JsonResponse
    {
        $data = $data->toArray();
        $response = compact('data', 'message');
        return new JsonResponse($response, $status);
    }

    public function asdhfjasdhfja()
    {
        $a = 'jasdklf';
    }
}
