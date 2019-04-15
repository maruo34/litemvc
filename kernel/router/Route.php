<?php

namespace Kernel\Router;

class Route
{
    public $callback;

    public $method;

    public $namespace;

    public function __construct(string $method, string $namespace, $callback)
    {
        $this->method = $method;
        $this->namespace = $namespace;
        $this->callback = $callback;
    }

    /**
     * @return Route
     * @throws \Exception
     */
    public static function __callStatic(string $name, array $arguments) : Route
    {
        list($namespace, $callback) = $arguments;

        switch ($name) {
            case 'get':
                return new Route('GET', $namespace, $callback);
   
            case 'post':
                return new Route('POST', $namespace, $callback);
            
            default:
                throw new \Exception('Call to undefined method {$self}::{$name}()');
        }
    }
}