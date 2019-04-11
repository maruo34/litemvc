<?php

namespace Kernel;

class Vue
{
    protected $view;

    protected $data;

    protected $layout;

    public function __construct(string $view, array $data)
    {
        $this->view = $view;
        $this->data = $data;

        $this->setViewPath();
        $this->setLayoutPath();
    }

    private function setViewPath()
    {
        $this->view = dirname(__DIR__) . DIRECTORY_SEPARATOR   
            . 'views' . DIRECTORY_SEPARATOR  
            . $this->view . '.php';
    }

    private function setLayoutPath()
    {
        $this->layout = dirname(__DIR__) . DIRECTORY_SEPARATOR
            . 'views' . DIRECTORY_SEPARATOR
            . 'layouts' . DIRECTORY_SEPARATOR
            . 'layout' . '.php';
    }

    public function renderHtml() : string
    {
        try {
            ob_start();
            extract($this->data, EXTR_OVERWRITE);
            include($this->view);

            $view = ob_get_clean();
        
            return include($this->layout);
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}