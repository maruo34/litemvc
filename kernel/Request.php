<?php

namespace Kernel;

class Request
{
    /**
     * Request body parameters ($_POST).
     */
    public $body;

    /**
     * Query string parameters ($_GET).
     */
    public $query;

    /**
     * Server and execution environment parameters ($_SERVER).
     */
    public $server;

    /**
     * Uploaded files ($_FILES).
     */
    public $files;

    /**
     * Cookies ($_COOKIE).
     */
    public $cookies;

    /**
     * Headers (taken from the $_SERVER).
     */
    public $headers;

    public function __construct(array $get, array $post, array $cookie, array $files, array $server)
    {
        $this->query = $get;
        $this->body = $post;
        $this->cookies = $cookie;
        $this->files = $files;
        $this->headers = $server;
    }

    public function isAjax() : bool
    {

    }

    public function getIp() : string
    {
        
    }
    
    public function getMethod() : string
    {

    }
    
    /**
     * Creates a new request with values from PHP's super globals.
     */
    public static function createFromGlobals()
    {
        return new Request($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}