<?php

namespace Kernel;

use Kernel\Router\ {
    Router,
    Route,
    RouteResolver
};

class Application
{
    protected $router;

    protected $base_path;

    public function __construct()
    {
        $this->init();
        $this->mapRoutes();
    }

    public function resolveRequest(Request $request) : Response
    {
        $route = $this->router->resolveRequest($request);

        $routeResolver = new RouteResolver($route);

        $response = $routeResolver->resolve($request); 
        
        return $response;
    }

    private function init()
    {
        $this->base_path = dirname(__DIR__);
        $this->router = new Router();
    }

    private function mapRoutes()
    {
        $this->router->pushRoutes(
            require_once (
                $this->base_path . DIRECTORY_SEPARATOR . '/routes/web.php'
            )
        );

        $this->router->pushRoutes(
            require_once (
                $this->base_path . DIRECTORY_SEPARATOR . '/routes/api.php'
            )
        );
    }
}