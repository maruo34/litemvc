<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Kernel\Application;

$response = $app->resolveRequest(Kernel\Request::createFromGlobals());

$response->send();