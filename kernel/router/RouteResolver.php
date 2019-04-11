<?php

namespace Kernel\Router;

use Kernel\Response;

class RouteResolver
{
    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function resolve(Request $request) : Response
    {

    }
}