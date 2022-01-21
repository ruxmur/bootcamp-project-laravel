<?php

namespace App\Services;

use Illuminate\Http\Request;

class DebugRequestActivityLogger extends AbstractRequestActivityLogger
{
    public function collectRequestData(Request $request): array
    {
        return [
            "ipAddress" => $request->ip(),
            "url" => $request->url(),
            "path" => $request->path(),
            "method" => $request->method(),
        ];
    }
}
