<?php

namespace Controllers;

class AdminControler extends Controller
{
    public function index()
    {
        return $this->view('admin/tasks', []);
    }
}