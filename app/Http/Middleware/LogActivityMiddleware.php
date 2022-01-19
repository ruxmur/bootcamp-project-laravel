<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\DebugRequestActivityLogger;
use App\Services\DummyRequestActivityLogger;
use App\Services\ProductionRequestActivityLogger;
use Illuminate\Http\Request;


class LogActivityMiddleware
{
    private DummyRequestActivityLogger $logger;
    private DebugRequestActivityLogger $debug;
    private ProductionRequestActivityLogger $production;

    /**
     * @param DummyRequestActivityLogger $logger
     */

    public function __contruct(DummyRequestActivityLogger $logger, DebugRequestActivityLogger $debug, ProductionRequestActivityLogger $production)
    {
        $this->logger = $logger;
        $this->debug = $debug;
        $this->production = $production;

    }

    /**
     * @param Request $request
     * @param Closure $next
     * @param string|null $type
     */

    public function handle($request, Closure $next, ?string $type = null)
    {
        $this->logger->logRequest($request, $type ?? 'unknown page');
        $this->debug->logRequest($request, $type ?? 'unknown page');
        $this->production->logRequest($request, $type ?? 'unknown page');

        return $next($request);
    }
}
