<?php

declare(strict_types=1);

namespace Router;

interface Dispatcher
{
    public function dispatch(HttpMethod $method, string $uri): mixed;
}
