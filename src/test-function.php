<?php

use Andaniel05\UndescribedTests\Facade;
use Pest\PendingCalls\TestCall;
use Pest\Support\HigherOrderTapProxy;

if (! function_exists('_test')) {
    function _test(string|Closure|null $description = null, ?Closure $closure = null): HigherOrderTapProxy|TestCall
    {
        return Facade::test($description, $closure);
    }
}