<?php

namespace Kernel;

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
        
        $routeResolver = new \Kernel\Router\RouteResolver($route);

        $response = $routeResolver->resolve($request); 
        
        return $response;
    }

    private function init()
    {
        $this->base_pach = dirname(__DIR__);
        $this->router = new \Kernel\Router\Router();
    }

    private function mapRoutes()
    {
        $this->router->defineRoutes(
            $this->base_path . DIRECTORY_SEPARATOR . '/routes/web.php'
        );

        $this->router->defineRoutes(
            $this->base_path . DIRECTORY_SEPARATOR . '/routes/api.php'
        );
    }
}