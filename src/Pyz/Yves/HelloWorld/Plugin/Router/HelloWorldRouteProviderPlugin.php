<?php

namespace Pyz\Yves\HelloWorld\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloWorldRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    protected const ROUTE_NAME_HELLO_WORLD = 'hello-world';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addHelloWorldRoute($routeCollection);

        return $routeCollection;
    }

    protected function addHelloWorldRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/hello-world', 'hello-world', 'index');
        $routeCollection->add(static::ROUTE_NAME_HELLO_WORLD, $route);

        return $routeCollection;
    }
}
