<?php

namespace TheCodingMachine\Middlewares;

use TheCodingMachine\Funky\Annotations\Tag;
use TheCodingMachine\Funky\Annotations\Factory;
use TheCodingMachine\Funky\ServiceProvider;
use TheCodingMachine\MiddlewareListServiceProvider;
use TheCodingMachine\MiddlewareOrder;

class CsrfHeaderCheckMiddlewareServiceProvider extends ServiceProvider
{
    /**
     * @Factory(tags={@Tag(name=MiddlewareListServiceProvider::MIDDLEWARES_QUEUE, priority=MiddlewareOrder::UTILITY)})
     */
    public static function createMiddleware(): CsrfHeaderCheckMiddleware
    {
        return CsrfHeaderCheckMiddlewareFactory::createDefault();
    }
}
