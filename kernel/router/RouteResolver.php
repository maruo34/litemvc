<?php

namespace Kernel\Router;

use Kernel\Response;
use Kernel\Request;

class RouteResolver
{
    protected $namespace = '\Controllers';

    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    public function resolve(Request $request) : Response
    {
        $callback = $this->route->callback;
        
        if(is_string($callback)) //if callback string such as ControllerName@actionName
        {
            list($controller, $action) = explode('@', $callback, 2);

            $controller = $this->namespace . "\\" . $controller;

            if(!class_exists($controller))
                throw new \Exception("Class {$controller} not found");

            if(!method_exists($controller, $action))
                throw new \Exception("Call to undefined method {$controller}::{$action}()");
            
            $controller = new $controller;

            $response = $controller->$action();
        }
        else if(is_callable($callback))
        {
            $response = call_user_func($callback, []);    
        }
        else 
        {
            throw new \Exception('!!!');
        }
        
        return $response;
    }
}