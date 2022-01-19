<?php

namespace App\Services;

use Illuminate\Http\Request;

class ProductionRequestActivityLogger extends AbstractRequestActivityLogger
{
    public function collectRequestData(Request $request): array
    {
        return [
            "id" => $request->input('id'),
            "name" => $request->input('name'),
            "type" => $request->input('type'),
            "duration" => $request->input('duration'),
            "price" => $request->input('price'),

        ];
    }
}
