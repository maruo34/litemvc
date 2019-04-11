<?php

namespace Kernel\Router;

class Route
{
    public function __constuct(string $method, string $namespace, $callback)
    {

    }

    public function __call(string $name, array $arguments) : Route
    {
        list($namespace, $callback) = $arguments;

        switch ($name) {
            case 'get':
                return new Route('GET', $namespace, $callback);
   
            case 'post':
                return new Route('POST', $namespace, $callback);
        
            default:
                return new \Exception('Method not found');
        }
    }
}