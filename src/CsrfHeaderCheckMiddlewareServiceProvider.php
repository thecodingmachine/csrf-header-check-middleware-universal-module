<?php

namespace TheCodingMachine\Middlewares;

use Interop\Container\ServiceProvider;
use Psr\Container\ContainerInterface;
use TheCodingMachine\MiddlewareListServiceProvider;
use TheCodingMachine\MiddlewareOrder;

class CsrfHeaderCheckMiddlewareServiceProvider implements ServiceProvider
{
    public function getServices()
    {
        return [
            CsrfHeaderCheckMiddleware::class => [self::class, 'createMiddleware'],
            MiddlewareListServiceProvider::MIDDLEWARES_QUEUE => [self::class, 'updatePriorityQueue'],
        ];
    }

    public static function createMiddleware(): CsrfHeaderCheckMiddleware
    {
        return CsrfHeaderCheckMiddlewareFactory::createDefault();
    }

    public static function updatePriorityQueue(ContainerInterface $container, callable $previous = null) : \SplPriorityQueue
    {
        if ($previous) {
            $priorityQueue = $previous();
            $priorityQueue->insert($container->get(CsrfHeaderCheckMiddleware::class), MiddlewareOrder::UTILITY);
            return $priorityQueue;
        } else {
            throw new \InvalidArgumentException("Could not find declaration for service '".MiddlewareListServiceProvider::MIDDLEWARES_QUEUE."'.");
        }
    }
}
