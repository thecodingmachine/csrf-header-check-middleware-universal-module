[![Latest Stable Version](https://poser.pugx.org/thecodingmachine/csrf-header-check-middleware-universal-module/v/stable)](https://packagist.org/packages/thecodingmachine/csrf-header-check-middleware-universal-module)
[![Latest Unstable Version](https://poser.pugx.org/thecodingmachine/csrf-header-check-middleware-universal-module/v/unstable)](https://packagist.org/packages/thecodingmachine/csrf-header-check-middleware-universal-module)
[![License](https://poser.pugx.org/thecodingmachine/csrf-header-check-middleware-universal-module/license)](https://packagist.org/packages/thecodingmachine/csrf-header-check-middleware-universal-module)

# TheCodingMachine's CSRF header checker middleware universal module

This package integrates the [TheCodingMachine's CSRF header checker middleware](https://github.com/thecodingmachine/csrf-header-check-middleware) in any [container-interop](https://github.com/container-interop/service-provider) compatible framework/container.

## Installation

```
composer require thecodingmachine/csrf-header-check-middleware-universal-module
```

Once installed, you need to register the [`TheCodingMachine\Middlewares\CsrfHeaderCheckMiddlewareServiceProvider`](src/CsrfHeaderCheckMiddlewareServiceProvider.php) into your container.

If your container supports [thecodingmachine/discovery](https://github.com/thecodingmachine/discovery) integration, you have nothing to do. Otherwise, refer to your framework or container's documentation to learn how to register *service providers*.

## Introduction

This middleware checks HTTP header to prevent CSRF attacks.
This service provider adds the middleware at the beginning of the stack.

## Provided services

This *service provider* provides the following services:

| Service name                | Description                          |
|-----------------------------|--------------------------------------|
| `TheCodingMachine\Middlewares\CsrfHeaderCheckMiddlewareServiceProvider`              | The CSRF checker middleware                           |

## Extended services

This *service provider* extends those services:

| Name                        | Compulsory | Description                            |
|-----------------------------|------------|----------------------------------------|
| `MiddlewareListServiceProvider::MIDDLEWARES_QUEUE`              | *no*      | This service providers inserts the CSRF middleware in the middleware queue.                             |

