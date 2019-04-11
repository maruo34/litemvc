<?php

namespace Controllers;

use Kernel\Vue;
use Kernel\Response;

class Controller
{
    protected function view(string $template, array $data, int $status_code)
    {
        $content = (new Vue($template, $data))->renderHtml();

        $headers = [];

        return new Response($content, $status_code, $headers);
    }
    
    protected function json(array $data, int $status_code = 200, array $headers = [])
    {
        $headers['content-type'] = 'application/json';
        
        return new Response($content, $status_code, $headers);
    }
}