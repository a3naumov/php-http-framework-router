<?php

declare(strict_types=1);

namespace Router;

enum DispatchResult: int
{
    case NOT_FOUND = 0;
    case FOUND = 1;
    case METHOD_NOT_ALLOWED = 2;
}
