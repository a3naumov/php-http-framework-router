<?php

declare(strict_types=1);

namespace Router;

interface RouteParser
{
    public function parse(string $route): array;
}
