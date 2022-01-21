<?php

namespace App\Services;

use Illuminate\Http\Request;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger
{
    public function collectRequestData(Request $request): array
    {
        return [
            "ip" => $request->ip(),
            "url" => $request->url(),
        ];
    }
}
