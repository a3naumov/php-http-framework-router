<?php

declare(strict_types=1);

namespace Router;

interface RouteCollector
{
    public function addRoute(HttpMethod $method, string $route);

    public function addGroup(string $prefix, callable $callback): void;
}
