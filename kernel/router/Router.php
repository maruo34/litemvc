<?php

namespace Kernel\Router;

use Kernel\Request;

class Router
{
    /**
     * @var array<Route>
     */
    protected $routes = [];

    public function resolveRequest(Request $request) : Route
    {
        foreach($this->routes as $route)
        {
            
        }

        return $route;
    }

    /**
     * @param array<Route>
     * @return void
     */
    public function pushRoutes(array $routes) : void
    {
        $this->routes = array_merge($this->routes, $routes);
    }
}